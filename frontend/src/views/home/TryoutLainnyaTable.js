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
import CircularProgress from '@mui/material/CircularProgress'
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


const TryoutBerikutnyaTable = ({ data, dataLoading }) => {
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
                          <Button variant='contained' disabled='true'>
                            Coming Soon
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
      <Box>Coming Soon</Box>
    </Box>
  )
}

export default TryoutBerikutnyaTable
