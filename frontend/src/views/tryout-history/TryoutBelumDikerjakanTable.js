// ** MUI Imports
import Paper from '@mui/material/Paper'
import Table from '@mui/material/Table'
import TableRow from '@mui/material/TableRow'
import Icon from 'src/@core/components/icon'
import { Typography } from '@mui/material'
import Dialog from '@mui/material/Dialog'
import DialogTitle from '@mui/material/DialogTitle'
import DialogContent from '@mui/material/DialogContent'
import DialogActions from '@mui/material/DialogActions'
import DialogContentText from '@mui/material/DialogContentText'
import TableBody from '@mui/material/TableBody'
import TableCell from '@mui/material/TableCell'
import TableContainer from '@mui/material/TableContainer'
import Button from '@mui/material/Button'
import Box from '@mui/material/Box'

import Link from '@mui/material/Link'


import { useState, useEffect } from 'react'

// ** Axios
import axios from 'axios'

import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

import { useRouter } from 'next/router'

const TryoutBelumDikerjakanTable = () => {
  const [data, setData] = useState([])
  const [selectedData, setSelectedData] = useState()
  const [open, setOpen] = useState(false)
  const router = useRouter()
  const [loading, setLoading] = useState(false)
  const [disabled, setDisabled] = useState(false)
  

  const handleClose = () => setOpen(false)


   const handleClickOpen = data => {
     setOpen(true)
     setSelectedData(data)
   }
  
  useEffect(() => {
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    axios
      .get('https://code.tryoutx.com/api/user/tryout', {
        headers: {
          Authorization: 'Bearer ' + storedToken
        }
      })
      .then(response => {
        setData(response.data.data)
        const responseData = response.data.data
        Object.keys(responseData).map(dataId => {
          responseData[dataId].map(data => {
            if (data.pivot.user_start !== null) {
              setDisabled(true)
            }
          })
        })

      })
      .catch(error => {
        console.error('Error fetching data:', error)
      })
  }, [])

  const handleStartTryout = async tryout_id => {
    tryout_id.preventDefault
    const user_pkg_id = { user_pkg_id: tryout_id }
    try {
      const cookies = new Cookies()
      const storedToken = cookies.get(authConfig.storageTokenKeyName)
      const response = await axios.post('https://code.tryoutx.com/api/user/tryout/start', user_pkg_id, {
        headers: {
          Authorization: 'Bearer ' + storedToken
        }
      })

      const questionUrl = `/question?user_pkg_id=${tryout_id}`
      router.push(questionUrl)
    } catch (error) {
      console.error(error)
    }
  }


  return data.length != 0 ? (
    <TableContainer component={Paper}>
      <Table sx={{ minWidth: 400 }} aria-label='simple table'>
        <TableBody>
          {Object.keys(data).map(dataId => (
            <TableRow
              key={dataId}
              sx={{
                '&:last-of-type td, &:last-of-type th': {
                  border: 0
                }
              }}
            >
              {data[dataId].map(data => {
                return (
                  <>
                    <TableCell component='th' scope='row'>
                      <Box sx={{ display: 'inline-flex', alignContent: 'space-between' }}>
                        <Box sx={{ mr: 3 }}>
                          <Icon icon='tabler:album' fontSize='2.75rem' />
                        </Box>
                        <Typography>
                          <b>{data.title}</b> <br />
                          {data.question_count} Soal | {data.sum_duration} Menit
                        </Typography>
                      </Box>
                      <Dialog
                        open={open}
                        disableEscapeKeyDown
                        aria-labelledby='alert-dialog-title'
                        aria-describedby='alert-dialog-description'
                        onClose={(event, reason) => {
                          if (reason !== 'backdropClick') {
                            handleClose()
                          }
                        }}
                      >
                        <DialogTitle id='alert-dialog-title'>Petunjuk Tryout</DialogTitle>
                        <DialogContent>
                          <DialogContentText id='alert-dialog-description'>
                            Soal berbentuk pilihan ganda, pilih huruf a, b, c, d, atau e yang dianggap sebagai jawaban
                            yang benar!
                          </DialogContentText>
                          <DialogContentText id='alert-dialog-description'>
                            <b>Jumlah Soal : {data.question_count} </b>
                          </DialogContentText>
                          <DialogContentText id='alert-dialog-description'>
                            <b>Waktu : {data.sum_duration} Menit</b>
                          </DialogContentText>
                          <DialogContentText id='alert-dialog-description'>Mulai tryout?</DialogContentText>
                        </DialogContent>
                        <DialogActions className='dialog-actions-dense'>
                          <Button onClick={handleClose}>Tidak</Button>
                          <Button onClick={handleClose} href='/question'>
                            Mulai
                          </Button>
                        </DialogActions>
                      </Dialog>
                    </TableCell>
                    <TableCell align='right'>
                      <Button variant='contained' disabled={disabled} onClick={() => handleClickOpen(data)}>
                        Kerjakan
                      </Button>
                    </TableCell>
                  </>
                )
              })}
            </TableRow>
          ))}
        </TableBody>
      </Table>
      {selectedData && (
        <Dialog
          open={open}
          disableEscapeKeyDown
          aria-labelledby='alert-dialog-title'
          aria-describedby='alert-dialog-description'
          onClose={(event, reason) => {
            if (reason !== 'backdropClick') {
              handleClose()
            }
          }}
        >
          <DialogTitle id='alert-dialog-title'>Petunjuk Tryout</DialogTitle>
          <DialogContent>
            <DialogContentText id='alert-dialog-description'>
              Soal berbentuk pilihan ganda, pilih huruf a, b, c, d, atau e yang dianggap sebagai jawaban yang benar!{' '}
              <br />
            </DialogContentText>
            <DialogContentText id='alert-dialog-description'>
              <br />
              <b>Jumlah Soal &nbsp;&nbsp;: {selectedData.question_count} butir</b>
            </DialogContentText>
            <DialogContentText id='alert-dialog-description'>
              <b>Waktu &emsp;&emsp;&emsp;: {selectedData.sum_duration} Menit</b>
            </DialogContentText>
            <DialogContentText id='alert-dialog-description'>
              <br />
              Waktu akan berjalan ketika anda menekan Mulai
            </DialogContentText>
          </DialogContent>
          <DialogActions className='dialog-actions-dense'>
            <Button disabled={loading} onClick={handleClose}>
              Tidak
            </Button>
            <Button disabled={loading} onClick={() => handleStartTryout(selectedData.pivot.user_pkg_id)}>
              Mulai
            </Button>
          </DialogActions>
        </Dialog>
      )}
    </TableContainer>
  ) : (
    <Box sx={{ display: 'flex', justifyContent: 'center', alignItems: 'center', minHeight: 200 }}>
      <Typography align='center'>Belum ada Tryout yang kamu bisa kerjakan</Typography>
    </Box>
  )
}

export default TryoutBelumDikerjakanTable
