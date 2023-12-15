import Paper from '@mui/material/Paper'
import Table from '@mui/material/Table'
import TableRow from '@mui/material/TableRow'
import Link from '@mui/material/Link'
import TableBody from '@mui/material/TableBody'
import TableCell from '@mui/material/TableCell'
import TableContainer from '@mui/material/TableContainer'
import Box from '@mui/material/Box'
import { Typography } from '@mui/material'
import ReviewDialog from './sharedComponentTryoutHistory/reviewDialog'
import { useState } from 'react'

const TryoutSudahDikerjakanTable = ({ props }) => {
  const [openDialog, setOpenDialog] = useState({})

  const handleClickOpenDialog = propsId => {
    setOpenDialog(prevState => ({
      ...prevState,
      [propsId]: true
    }))
  }

  const handleCloseDialog = propsId => {
    setOpenDialog(prevState => ({
      ...prevState,
      [propsId]: false
    }))
  }
  
  return props && props.length > 0 ? (
    <TableContainer component={Paper}>
      <Table sx={{ minWidth: '100%' }} aria-label='simple table'>
        <TableBody>
          {props.map((data, index) => (
            <TableRow
              key={index}
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
                    <b>{data.title}</b>
                  </Typography>
                  <Typography variant='caption'>
                    {data.pivot.sum_true} benar | {data.pivot.sum_false} salah
                  </Typography>
                </Box>
              </TableCell>
              <TableCell align='right'>Nilai: {data.pivot.score}</TableCell>
              <TableCell align='right'>
                <Link component='button' onClick={() => handleClickOpenDialog(index)}>
                  Review
                </Link>
              </TableCell>
              {openDialog[index] && (
                <ReviewDialog
                  handleClose={() => handleCloseDialog(index)}
                  open={openDialog[index]}
                  user_pkg_id={data.pivot.user_pkg_id}
                  tryout_id={data.tryout_id}
                />
              )}
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </TableContainer>
  ) : (
    <Box sx={{ display: 'flex', justifyContent: 'center', alignItems: 'center', minHeight: 200 }}>
      <Typography align='center'>Kamu belum mengerjakan tryout, Silahkan kerjakan terlebih dahulu!</Typography>
    </Box>
  )
}

export default TryoutSudahDikerjakanTable
