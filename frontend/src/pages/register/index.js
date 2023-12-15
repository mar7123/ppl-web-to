// ** React Imports
import { useState } from 'react'

// ** Next Import
import Link from 'next/link'

import { useRouter } from 'next/router'

// ** MUI Components
import Button from '@mui/material/Button'
import Typography from '@mui/material/Typography'
import IconButton from '@mui/material/IconButton'
import Box from '@mui/material/Box'
import useMediaQuery from '@mui/material/useMediaQuery'
import { styled, useTheme } from '@mui/material/styles'
import InputAdornment from '@mui/material/InputAdornment'
import MuiFormControlLabel from '@mui/material/FormControlLabel'
import MuiInputLabel from '@mui/material/InputLabel'
import MenuItem from '@mui/material/MenuItem'

import Footer from 'src/views/footer/Footer'

import {  useEffect } from 'react'

// ** MUI Imports
import Alert from '@mui/material/Alert'
import Snackbar from '@mui/material/Snackbar'

// ** Third Party Imports
import DatePicker from 'react-datepicker'

// ** Custom Component Imports
import CustomInput from './PickersCustomInput'

import axios from 'axios'

import moment from 'moment'

// ** Custom Component Import
import CustomTextField from 'src/@core/components/mui/text-field'

// ** Icon Imports
import Icon from 'src/@core/components/icon'

// ** Hooks
import { useSettings } from 'src/@core/hooks/useSettings'

//date DatePickerWrapper
import DatePickerWrapper from 'src/@core/styles/libs/react-datepicker'

// ** Demo Imports
import FooterIllustrationsV2 from 'src/views/pages/auth/FooterIllustrationsV2'
import BlankLayoutWithAppBar from 'src/@core/layouts/BlankLayoutWithAppBar'
//cleave input format
import Cleave from 'cleave.js/react'
import 'cleave.js/dist/addons/cleave-phone.id'
import CleaveWrapper from 'src/@core/styles/libs/react-cleave'

// ** Styled Components
const RegisterIllustration = styled('img')(({ theme }) => ({
  zIndex: 2,
  maxHeight: 600,
  marginTop: theme.spacing(12),
  marginBottom: theme.spacing(12),
  [theme.breakpoints.down(1540)]: {
    maxHeight: 550
  },
  [theme.breakpoints.down('lg')]: {
    maxHeight: 500
  }
}))

const RightWrapper = styled(Box)(({ theme }) => ({
  width: '100%',
  [theme.breakpoints.up('md')]: {
    maxWidth: 450
  },
  [theme.breakpoints.up('lg')]: {
    maxWidth: 600
  },
  [theme.breakpoints.up('xl')]: {
    maxWidth: 750
  }
}))

const LinkStyled = styled(Link)(({ theme }) => ({
  textDecoration: 'none',
  color: `${theme.palette.primary.main} !important`
}))

const FormControlLabel = styled(MuiFormControlLabel)(({ theme }) => ({
  marginTop: theme.spacing(1.5),
  marginBottom: theme.spacing(1.75),
  '& .MuiFormControlLabel-label': {
    color: theme.palette.text.secondary
  }
}))

const InputLabel = styled(MuiInputLabel)(({ theme }) => ({
  lineHeight: 1.154,
  maxWidth: 'max-content',
  marginBottom: theme.spacing(1),
  color: theme.palette.text.primary,
  fontSize: theme.typography.body2.fontSize,
  
}))



const Register = () => {
  // ** States
  const [showPassword, setShowPassword] = useState(false)
 const [loading, setLoading] = useState(false)

  const [username, setUsername] = useState()
  const [fullname, setFullname] = useState()
  const [password, setPassword] = useState()
  const [email, setEmail] = useState()
  const [birthdate, setBirthdate] = useState(new Date())
  const [phone, setPhonenum] = useState()
  const [school, setSchool] = useState()
  const [major, setMajor] = useState()
  const [graddate, setGraddate] = useState()
  

  const [open, setOpen] = useState(false)
  const [snackPack, setSnackPack] = useState([])
  const [messageInfo, setMessageInfo] = useState(undefined)
  const [errormessageInfo, setErrormessageInfo] = useState(undefined)
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


  // ** Hooks
  const theme = useTheme()
  const { settings } = useSettings()
  const hidden = useMediaQuery(theme.breakpoints.down('md'))

  // ** Vars
  const { skin } = settings
  const imageSource = skin === 'bordered' ? 'auth-v2-register-illustration-bordered' : 'auth-v2-register-illustration'
  const { direction } = theme
  const popperPlacement = direction === 'ltr' ? 'bottom-start' : 'bottom-end'

  const router = useRouter()

  const handleSubmit = async (event) => {
    setLoading(true)
    event.preventDefault()
    const userData = {
      username: username,
      full_name: fullname,
      password: password,
      email: email,
      birth_date: moment(birthdate).format('YYYY-MM-DD'),
      phone_num: phone,
      school: school,
      major: major,
      grad_date: graddate
    }

    try {
      const response = await axios.post('https://code.tryoutx.com/api/auth/register', userData)

      // Handle the response as needed
      const message = 'success'
      setSnackPack(prev => [...prev, { message, key: new Date().getTime() }])
      setErrormessageInfo('Registrasi Berhasil, Anda akan dipindahkan ke halaman login!')
      console.log('Registration successful')
      console.log(response.data) 
      
      router.push('/login?registration_success=true')
      setLoading(false)
    } catch (error) {
      // Handle errors, such as network issues or server errors
      const message = 'error'
      setSnackPack(prev => [...prev, { message, key: new Date().getTime() }])
      const ErrorMessages = () => {
        const concatenatedErrors = Object.keys(error.response.data.errors)
          .map(field => error.response.data.errors[field].join('<br/>'))
          .join('<br/>')
        return <div dangerouslySetInnerHTML={{ __html: concatenatedErrors }} />
      }
      setErrormessageInfo(ErrorMessages)
      setLoading(false)
    }
  }
  


  return (
    <>
      <Box className='content-right' sx={{ backgroundColor: 'background.paper' }}>
        {!hidden ? (
          <Box
            sx={{
              flex: 1,
              display: 'flex',
              position: 'relative',
              alignItems: 'center',
              borderRadius: '20px',
              justifyContent: 'center',
              backgroundColor: 'customColors.bodyBg',
              margin: theme => theme.spacing(8, 0, 8, 8)
            }}
          >
            <RegisterIllustration
              alt='register-illustration'
              src={`/images/pages/${imageSource}-${theme.palette.mode}.png`}
            />
            <FooterIllustrationsV2 />
          </Box>
        ) : null}
        <RightWrapper>
          <Box
            sx={{
              p: [6, 12],
              height: '100%',
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'center'
            }}
          >
            <Box sx={{ width: '100%', maxWidth: 400 }}>
              <Box sx={{ my: 6 }}>
                <Typography variant='h3' sx={{ mb: 1.5 }}>
                  Belajar berawal disini🚀
                </Typography>
                <Typography sx={{ color: 'text.secondary' }}>Belajar bersama TryOutX.com</Typography>
              </Box>

              <form noValidate autoComplete='off' onSubmit={handleSubmit}>
                <DatePickerWrapper>
                  <CleaveWrapper>
                    <CustomTextField
                      fullWidth
                      name='email_user'
                      onChange={e => setEmail(e.target.value)}
                      label='Email'
                      sx={{ mb: 4, mt: 4 }}
                      placeholder='user@email.com'
                    />
                    <CustomTextField
                      fullWidth
                      label='Password'
                      name='password_user'
                      autoComplete='off'
                      onChange={e => setPassword(e.target.value)}
                      id='auth-login-v2-password'
                      type={showPassword ? 'text' : 'password'}
                      InputProps={{
                        endAdornment: (
                          <InputAdornment position='end'>
                            <IconButton
                              edge='end'
                              onMouseDown={e => e.preventDefault()}
                              onClick={() => setShowPassword(!showPassword)}
                            >
                              <Icon fontSize='1.25rem' icon={showPassword ? 'tabler:eye' : 'tabler:eye-off'} />
                            </IconButton>
                          </InputAdornment>
                        )
                      }}
                    />
                    <CustomTextField
                      autoFocus
                      onChange={e => setUsername(e.target.value)}
                      fullWidth
                      sx={{ mb: 4, mt: 4 }}
                      name='username'
                      label='Username'
                      autoComplete='off'
                      inputProps={{ maxLength: 25 }}
                    />
                    <CustomTextField
                      value={fullname}
                      autoFocus
                      fullWidth
                      sx={{ mb: 4 }}
                      name='fullname'
                      onChange={e => setFullname(e.target.value)}
                      label='Fullname'
                      inputProps={{ maxLength: 40 }}
                    />
                    <DatePicker
                      showYearDropdown
                      showMonthDropdown
                      selected={birthdate}
                      id='basic-input'
                      popperPlacement={popperPlacement}
                      onChange={birthdate => setBirthdate(birthdate)}
                      placeholderText='Click to select a date'
                      customInput={<CustomInput label='Tanggal Lahir' fullWidth />}
                    />
                    {/* <CustomTextField fullWidth label='Phone Number' sx={{ mb: 4, mt: 3 }} placeholder='+62812345678' /> */}

                    <InputLabel htmlFor='prefix' sx={{ mt: 4 }}>
                      Nomor Telepon
                    </InputLabel>
                    <Cleave
                      id='prefix'
                      name='phone_num'
                      onChange={e => setPhonenum(e.target.value)}
                      options={{ prefix: '+62', blocks: [14], numericOnly: true }}
                
                    />
                    <CustomTextField
                      fullWidth
                      label='Nama Sekolah'
                      sx={{ mb: 4, mt: 4 }}
                      name='school'
                      onChange={e => setSchool(e.target.value)}
                      inputProps={{ maxLength: 20 }}
                    />
                    <CustomTextField
                      select
                      name='major'
                      value={major}
                      label='Jurusan'
                      onChange={e => setMajor(e.target.value)}
                      id='custom-select'
                      fullWidth
                    >
                      <MenuItem value={'Saintek'}>Saintek</MenuItem>
                      <MenuItem value={'Soshum'}>Soshum</MenuItem>
                    </CustomTextField>
                    <InputLabel htmlFor='prefix' name='grad_date' sx={{ mt: 4 }}>
                      Tahun Lulus
                    </InputLabel>
                    <Cleave
                      id='numeral'
                      onChange={e => setGraddate(e.target.value)}
                      placeholder='2023'
                      options={{ date: true, datePattern: ['Y'] }}
                    />
                  </CleaveWrapper>
                </DatePickerWrapper>

                <Button fullWidth type='submit' disabled={loading} variant='contained' sx={{ mb: 4, mt: 4 }}>
                  Sign up
                </Button>
                <Box sx={{ display: 'flex', alignItems: 'center', flexWrap: 'wrap', justifyContent: 'center' }}>
                  <Typography sx={{ color: 'text.secondary', mr: 2 }}>Already have an account?</Typography>
                  <Typography component={LinkStyled} href='/login'>
                    Sign in instead
                  </Typography>
                </Box>
              </form>
            </Box>
          </Box>
        </RightWrapper>
        <Snackbar
          open={open}
          onClose={handleClose}
          autoHideDuration={3000}
          TransitionProps={{ onExited: handleExited }}
          key={messageInfo ? messageInfo.key : undefined}
          message={messageInfo ? messageInfo.message : undefined}
          anchorOrigin={{ vertical: 'top', horizontal: 'center' }}
        >
          <Alert
            elevation={3}
            variant='filled'
            onClose={handleClose}
            sx={{ width: '100%' }}
            severity={messageInfo?.message === 'success' ? 'success' : 'error'}
          >
            {errormessageInfo}
          </Alert>
        </Snackbar>
      </Box>
      <Footer />
    </>
  )
}
Register.getLayout = page => <BlankLayoutWithAppBar>{page}</BlankLayoutWithAppBar>
Register.guestGuard = true

export default Register
