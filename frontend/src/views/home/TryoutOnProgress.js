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
import { useState, useEffect } from 'react'

// ** MUI Imports
import Dialog from '@mui/material/Dialog'
import DialogTitle from '@mui/material/DialogTitle'
import DialogContent from '@mui/material/DialogContent'
import DialogActions from '@mui/material/DialogActions'
import DialogContentText from '@mui/material/DialogContentText'

// ** Axios
import axios from 'axios'

import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

import { useRouter } from 'next/router'

const TryoutOnProgress = data => {

  const router = useRouter()

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
      router.reload()
    }
  }

  return data.length != 0 ? (
    <TableContainer component={Paper} sx={{}}>
      <Table sx={{}} aria-label='simple table'>
        <TableBody>
          <TableRow
            key={data.data}
            sx={{
              '&:last-of-type td, &:last-of-type th': {
                border: 0
              }
            }}
          >
            <TableCell component='th' scope='row'>
              <Box sx={{ display: 'inline-flex', alignContent: 'space-between' }}>
                <Box sx={{ mr: 3 }}>
                  <Icon icon='tabler:album' fontSize='2.75rem' />
                </Box>
                <Typography>
                  <b>{data.data.title}</b> <br />
                  {data.data.question_count} Soal | {data.data.sum_duration} Menit
                </Typography>
              </Box>
      
            </TableCell>
            <TableCell align='right'>
              <Typography variant='h6'>Status: On Going </Typography>
            </TableCell>

            <TableCell align='right'>
              <Button variant='contained' onClick={() => handleStartTryout(data.data.pivot.user_pkg_id)}>
                Lanjutkan
              </Button>
            </TableCell>
          </TableRow>
        </TableBody>
      </Table>
    </TableContainer>
  ) : (
    <Box
      sx={{
        display: 'flex',
        displayDirection: 'column',
        alignContent: 'center',
        alignItems: 'center',
        justifyContent: 'center',
        minWidth: 400,
        minHeight: 400
      }}
    >
      <Box>Belum ada Tryout yang bisa kamu kerjakan silahkan beli terlebih dahulu! </Box>
    </Box>
  )
}

export default TryoutOnProgress
