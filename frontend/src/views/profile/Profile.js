// ** Custom Component Imports
import CustomInput from './PickersCustomInput'
import React, { useState, useEffect } from 'react'
import axios from 'axios'
import Cookies from 'universal-cookie'
import authConfig from 'src/configs/auth'
import Card from '@mui/material/Card'
import CardHeader from '@mui/material/CardHeader'
import CardContent from '@mui/material/CardContent'
import CustomTextField from 'src/@core/components/mui/text-field'
import Button from '@mui/material/Button'
import DatePicker from 'react-datepicker'
import MenuItem from '@mui/material/MenuItem'
import { useAuth } from 'src/hooks/useAuth'
import { useRouter } from 'next/router'
import CircularProgress from '@mui/material/CircularProgress'
import { Box } from '@mui/material'

import Cleave from 'cleave.js/react'
import 'cleave.js/dist/addons/cleave-phone.id'
import CleaveWrapper from 'src/@core/styles/libs/react-cleave'
import InputLabel from '@mui/material/InputLabel'

import moment from 'moment'

// ** SNACKBAR
import Alert from '@mui/material/Alert'
import Snackbar from '@mui/material/Snackbar'

const ProfilePage = () => {
  const [formData, setFormData] = useState({
    birth_date: '',
    email: '',
    full_name: '',
    grad_date: '',
    school: '',
    major: '',
    phone_num: '',
    username: ''
  })
  const [error, setError] = useState(undefined)
  const [date, setDate] = useState(null)
  const { logout } = useAuth()
  const router = useRouter()
  const [loadingProfile, setLoadingProfile] = useState(false)

  const handleLogout = () => {
    logout()
  }

  useEffect(() => {
    setLoadingProfile(true)
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    axios
      .get('https://code.tryoutx.com/api/user', {
        headers: {
          Authorization: 'Bearer ' + storedToken
        }
      })
      .then(response => {
        const userData = response.data
        setFormData({
          ...formData,
          //moment(userData.birthdate).format('YYYY-MM-DD')
          birth_date: moment(userData.birthdate).format('YYYY-MM-DD'),
          email: userData.email,
          full_name: userData.full_name,
          grad_date: userData.grad_date,
          school: userData.school,
          major: userData.major,
          phone_num: userData.phone_num,
          username: userData.username
        })
        setDate(new Date(userData.birth_date))
        setLoadingProfile(false)
      })
      .catch(error => {
        console.log(error)
        router.reload()
      })
  }, [router])

  //SnackBar
  const [open, setOpen] = useState(false)
  const [snackPack, setSnackPack] = useState([])
  const [messageInfo, setMessageInfo] = useState(undefined)
   

  useEffect(() => {
    if (snackPack.length && !messageInfo) {
      setOpen(true)
      setSnackPack(prev => prev.slice(1))
      setMessageInfo({ ...snackPack[0] })
    } else if (snackPack.length && messageInfo && open) {
      setOpen(false)
    }
  }, [snackPack, messageInfo, open])

  const handleClose = (event, reason) => {
    if (reason === 'clickaway') {
      return
    }
    setOpen(false)
  }

  const handleExited = () => {
    setMessageInfo(undefined)
  }

  const handleFormChange = e => {
    const { name, value } = e.target
    if (name == 'birth_date') {
      const { selected } = e.target
      setFormData({ ...formData, [name]: selected })
    } else {
      setFormData({ ...formData, [name]: value })
    }
  }

  const handleDateChange = (newDate) => {
    setDate(newDate)
    setFormData({ ...formData, birth_date: moment(newDate).format('YYYY-MM-DD') })
  }

  
  const handleSubmit = e => {
    e.preventDefault()
    const post = async () => {
      try {
        const cookies = new Cookies()
        const storedToken = cookies.get(authConfig.storageTokenKeyName)
        const response = await axios.post('https://code.tryoutx.com/api/user/update', formData, {
          headers: {
            Authorization: 'Bearer ' + storedToken
          }
        })
    
         const message = 'success'
          setError('Update Success!')
         setSnackPack(prev => [...prev, { message, key: new Date().getTime() }])
         router.reload()
      } catch (error) {
        console.error('Error updating data:', error)
        const message = 'error'
          const ErrorMessages = () => {
            const concatenatedErrors = Object.keys(error.response.data.errors)
              .map(field => error.response.data.errors[field].join('<br/>'))
              .join('<br/>')
            return <div dangerouslySetInnerHTML={{ __html: concatenatedErrors }} />
          }
        setError(ErrorMessages)
        setSnackPack(prev => [...prev, { message, key: new Date().getTime() }])
      }
    }
    post()
    console.log('Form data submitted:', formData)
  }

  return loadingProfile ? (
    <Box
      sx={{
        display: 'flex',
        displayDirection: 'column',
        alignContent: 'center',
        alignItems: 'center',
        justifyContent: 'center',
        minWidth: '100%',
        minHeight: 400
      }}
    >
      <Box>
        <CircularProgress />
      </Box>
    </Box>
  ) : (
    <Card>
      <CardHeader title='Profil'></CardHeader>
      <CardContent>
        <form onSubmit={handleSubmit}>
          <CleaveWrapper>
            <CustomTextField
              fullWidth
              label='Username'
              sx={{ mb: 4 }}
              name='username'
              value={formData.username}
              onChange={handleFormChange}
              inputProps={{ maxLength: 25 }}
            />
            <CustomTextField
              fullWidth
              label='Nama Lengkap'
              sx={{ mb: 4 }}
              name='full_name'
              value={formData.full_name}
              onChange={handleFormChange}
              inputProps={{ maxLength: 40 }}
            />
            <CustomTextField
              fullWidth
              label='Email'
              sx={{ mb: 4 }}
              name='email'
              value={formData.email}
              onChange={handleFormChange}
              inputProps={{ maxLength: 40 }}
            />
            <InputLabel htmlFor='prefix' sx={{}}>
              Nomor Telepon
            </InputLabel>
            <Cleave
              id='prefix'
              name='phone_num'
              value={formData.phone_num}
              onChange={handleFormChange}
              options={{ blocks: [14], numericOnly: true }}
            />
            <CustomTextField
              fullWidth
              label='School'
              sx={{ mb: 4, mt: 2 }}
              name='school'
              value={formData.school}
              onChange={handleFormChange}
              inputProps={{ maxLength: 20 }}
            />
            <DatePicker
              showYearDropdown
              showMonthDropdown
              name='birth_date'
              selected={date}
              id='basic-input'
              onChange={newDate => handleDateChange(newDate)}
              placeholderText='Click to select a date'
              customInput={<CustomInput label='Birth date' fullWidth />}
            />
            <CustomTextField
              fullWidth
              select
              label='Major'
              sx={{ mb: 4, mt: 4 }}
              name='major'
              value={formData.major}
              onChange={handleFormChange}
            >
              <MenuItem value={'Saintek'}>Saintek</MenuItem>
              <MenuItem value={'Soshum'}>Soshum</MenuItem>
            </CustomTextField>
            <InputLabel htmlFor='prefix' sx={{}}>
              Tahun Lulus
            </InputLabel>
            <Cleave
              id='numeral'
              label='Graduation Date'
              name='grad_date'
              value={formData.grad_date}
              onChange={handleFormChange}
              placeholder='2023'
              options={{ date: true, datePattern: ['Y'] }}
            />
            <Button fullWidth type='submit' variant='contained' color='success' sx={{ mb: 4, mt: 4 }}>
              Edit
            </Button>
            <Button fullWidth onClick={handleLogout} variant='contained' color='error' sx={{ mb: 4, mt: 4 }}>
              Logout
            </Button>
          </CleaveWrapper>
        </form>
      </CardContent>
      <Snackbar
        open={open}
        anchorOrigin={{ vertical: 'top', horizontal: 'center' }}
        onClose={handleClose}
        autoHideDuration={6000}
        TransitionProps={{ onExited: handleExited }}
        key={messageInfo ? messageInfo.key : undefined}
        message={messageInfo ? messageInfo.message : undefined}
      >
        <Alert
          elevation={3}
          variant='filled'
          onClose={handleClose}
          sx={{ width: '100%', minWidth: 500 }}
          severity={messageInfo?.message === 'success' ? 'success' : 'error'}
        >
          {error}
        </Alert>
      </Snackbar>
    </Card>
  )
}

export default ProfilePage
