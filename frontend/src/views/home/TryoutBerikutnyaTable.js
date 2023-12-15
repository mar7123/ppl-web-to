// ** MUI Imports
import Paper from '@mui/material/Paper'
import Table from '@mui/material/Table'
import TableRow from '@mui/material/TableRow'

import TableBody from '@mui/material/TableBody'
import TableCell from '@mui/material/TableCell'
import TableContainer from '@mui/material/TableContainer'
import Button from '@mui/material/Button'
import Box from '@mui/material/Box'

import Icon from 'src/@core/components/icon'
import { Typography } from '@mui/material'
import {  useState, useEffect } from 'react'

// ** MUI Imports
import Dialog from '@mui/material/Dialog'
import DialogTitle from '@mui/material/DialogTitle'
import DialogContent from '@mui/material/DialogContent'
import DialogActions from '@mui/material/DialogActions'
import DialogContentText from '@mui/material/DialogContentText'
import CircularProgress from '@mui/material/CircularProgress'

// ** Axios
import axios from 'axios'

import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

import { useRouter } from 'next/router'

const TryoutBerikutnyaTable = ({ data, onGoingCheck, dataLoading }) => {
  const [loading, setLoading] = useState(false)
  const [selectedData, setSelectedData] = useState()
  const [open, setOpen] = useState(false)
 

  const handleClickOpen = data => {
    setOpen(true)
    setSelectedData(data)
  }
  const router = useRouter()

  const handleClose = () => setOpen(false)

  const handleStartTryout = async tryout_id => {
    setLoading(true)
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
      setLoading(false)
      const questionUrl = `/question?user_pkg_id=${tryout_id}`
      router.push(questionUrl)
    } catch (error) {
      console.log(error)
    }
  }

  return dataLoading ? (
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
        <CircularProgress />{' '}
      </Box>
    </Box>
  ) : data.length !== 0 ? (
    <>
      <TableContainer component={Paper} sx={{ minHeight: 400, maxHeight: 400 }}>
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
                {Array.isArray(data[dataId]) ? (
                  data[dataId].map(dataTo => {
                    return (
                      <>
                        <TableCell component='th' scope='row'>
                          <Box sx={{ display: 'inline-flex', alignContent: 'space-between' }}>
                            <Box sx={{ mr: 3 }}>
                              <Icon icon='tabler:album' fontSize='2.75rem' />
                            </Box>
                            <Typography>
                              <b>{dataTo.title}</b> <br />
                              {dataTo.question_count} Soal | {dataTo.sum_duration} Menit
                            </Typography>
                          </Box>
                        </TableCell>
                        <TableCell align='right'>
                          <Button variant='contained' disabled={onGoingCheck} onClick={() => handleClickOpen(dataTo)}>
                            Kerjakan
                          </Button>
                        </TableCell>
                      </>
                    )
                  })
                ) : (
                  <TableCell component='th' scope='row' colSpan={2}>
                    Not an array
                  </TableCell>
                )}
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>

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
    </>
  ) : (
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
      <Typography align='center'>Belum ada Tryout yang bisa kamu kerjakan</Typography>
    </Box>
  )
}

export default TryoutBerikutnyaTable
