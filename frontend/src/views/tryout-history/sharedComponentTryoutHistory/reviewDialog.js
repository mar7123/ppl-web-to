// ** React Imports
import { useState } from 'react'

// ** MUI Imports
import Button from '@mui/material/Button'
import Dialog from '@mui/material/Dialog'
import { styled } from '@mui/material/styles'
import Typography from '@mui/material/Typography'
import DialogTitle from '@mui/material/DialogTitle'
import DialogContent from '@mui/material/DialogContent'
import DialogActions from '@mui/material/DialogActions'
import IconButton from '@mui/material/IconButton'
import Paper from '@mui/material/Paper'
import Table from '@mui/material/Table'
import TableRow from '@mui/material/TableRow'
import Link from '@mui/material/Link'
import TableBody from '@mui/material/TableBody'
import TableCell from '@mui/material/TableCell'
import TableContainer from '@mui/material/TableContainer'
import Box from '@mui/material/Box'

// ** Axios
import axios from 'axios'

import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

import { useRouter } from 'next/router'

// ** Icon Imports
import Icon from 'src/@core/components/icon'

const CustomCloseButton = styled(IconButton)(({ theme }) => ({
  top: 0,
  right: 0,
  color: 'grey.500',
  position: 'absolute',
  boxShadow: theme.shadows[2],
  transform: 'translate(10px, -10px)',
  borderRadius: theme.shape.borderRadius,
  backgroundColor: `${theme.palette.background.paper} !important`,
  transition: 'transform 0.25s ease-in-out, box-shadow 0.25s ease-in-out',
  '&:hover': {
    transform: 'translate(7px, -5px)'
  }
}))

const props = {
  1: { title: 'tes1' },
  2: { title: 'tes2' },
  3: { title: 'tes3' }
}

const ReviewDialog = ({ handleClose, open, user_pkg_id, subToData }) => {
  const router = useRouter()

 
  return subToData != null ? (
    <div>
      <Dialog
        open={open}
        onClose={handleClose}
        aria-labelledby='customized-dialog-title'
        sx={{ '& .MuiDialog-paper': { overflow: 'visible' } }}
      >
        <DialogTitle id='customized-dialog-title' sx={{ p: 4 }}>
          <Typography variant='h6' component='span'>
            Tryout Review Details
          </Typography>
          <CustomCloseButton aria-label='close' onClick={handleClose}>
            <Icon icon='tabler:x' fontSize='1.25rem' />
          </CustomCloseButton>
        </DialogTitle>
        <DialogContent dividers sx={{ p: theme => `${theme.spacing(4)} !important` }}>
          <TableContainer component={Paper}>
            <Table sx={{ minWidth: 400 }} aria-label='simple table'>
              <TableBody>
                {Object.keys(subToData).map(subToDataID => (
                  <TableRow
                    key={subToDataID}
                    sx={{
                      '&:last-of-type td, &:last-of-type th': {
                        border: 0
                      }
                    }}
                  >
                    <TableCell component='th' scope='row'>
                      <Box
                        href='/question'
                        sx={{ display: 'inline-flex', alignContent: 'space-between', flexDirection: 'column' }}
                      >
                        <Typography>
                          <b>{subToData[subToDataID].sub_title}</b>
                        </Typography>
                      </Box>
                    </TableCell>
                    <TableCell align='right'>Nilai: {subToData[subToDataID].sub_score}</TableCell>
                  </TableRow>
                ))}
              </TableBody>
            </Table>
          </TableContainer>
        </DialogContent>
        <DialogActions sx={{ p: theme => `${theme.spacing(3)} !important` }}>
          <Button onClick={() => router.push(`/question-review?user_pkg_id=${user_pkg_id}`)}>Review</Button>
        </DialogActions>
      </Dialog>
    </div>
  ) : (
    <div>
      <Dialog
        open={open}
        onClose={handleClose}
        aria-labelledby='customized-dialog-title'
        sx={{ '& .MuiDialog-paper': { overflow: 'visible' } }}
      >
        <DialogTitle id='customized-dialog-title' sx={{ p: 4 }}>
          <Typography variant='h6' component='span'>
            Tryout Review Details
          </Typography>
          <CustomCloseButton aria-label='close' onClick={handleClose}>
            <Icon icon='tabler:x' fontSize='1.25rem' />
          </CustomCloseButton>
        </DialogTitle>

        <DialogContent dividers sx={{ p: theme => `${theme.spacing(4)} !important`, minWidth: 300 }}>
          <Typography>Nilai belum tersedia</Typography>
        </DialogContent>

        <DialogActions sx={{ p: theme => `${theme.spacing(3)} !important` }}>
          <Button onClick={() => router.push(`/question-review?user_pkg_id=${user_pkg_id}`)}>Review</Button>
        </DialogActions>
      </Dialog>
    </div>
  )
}

export default ReviewDialog
