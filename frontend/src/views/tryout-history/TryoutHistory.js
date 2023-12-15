// ** MUI Import
import Box from '@mui/material/Box'
import Card from '@mui/material/Card'
import Avatar from '@mui/material/Avatar'
import { styled } from '@mui/material/styles'
import TimelineDot from '@mui/lab/TimelineDot'
import TimelineItem from '@mui/lab/TimelineItem'
import Typography from '@mui/material/Typography'
import CardContent from '@mui/material/CardContent'
import Link from '@mui/material/Link'
import TimelineContent from '@mui/lab/TimelineContent'
import TimelineSeparator from '@mui/lab/TimelineSeparator'
import TimelineConnector from '@mui/lab/TimelineConnector'
import MuiTimeline from '@mui/lab/Timeline'
import MuiCardHeader from '@mui/material/CardHeader'
import Paper from '@mui/material/Paper'
import Table from '@mui/material/Table'
import TableRow from '@mui/material/TableRow'
import TableBody from '@mui/material/TableBody'
import TableCell from '@mui/material/TableCell'
import TableContainer from '@mui/material/TableContainer'
import { Snackbar } from '@mui/material'
import CircularProgress from '@mui/material/CircularProgress'


import { useState } from 'react'
import { useEffect} from 'react'

// ** Custom Components Imports
import Icon from 'src/@core/components/icon'
import OptionsMenu from 'src/@core/components/option-menu'

import TryoutBelumDikerjakanTable from './TryoutBelumDikerjakanTable'
import TryoutSudahDikerjakanTable from './TryoutSudahDikerjakanTable'
import ReviewDialog from './sharedComponentTryoutHistory/reviewDialog'
import { useRouter } from 'next/router'

// ** Axios
import axios from 'axios'

import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

// Styled Timeline component
const Timeline = styled(MuiTimeline)({
  paddingLeft: 0,
  paddingRight: 0,
  '& .MuiTimelineItem-root': {
    width: '100%',
    '&:before': {
      display: 'none'
    }
  }
})

const CardHeader = styled(MuiCardHeader)(({ theme }) => ({
  '& .MuiTypography-root': {
    lineHeight: 1.6,
    fontWeight: 500,
    fontSize: '1.125rem',
    letterSpacing: '0.15px',
    [theme.breakpoints.up('sm')]: {
      fontSize: '1.25rem'
    }
  }
}))

const propsPlaceholder = {
  1: { title: 'tes1' },
  2: { title: 'tes2' },
  3: { title: 'tes3' }
}

const TryoutHistory = () => {
  const [data, setData] = useState([])
  const [dataRecent, setRecentData] = useState({})
  const [subToScore, setSubToScore] = useState(propsPlaceholder)
  const [open, setOpen] = useState(false)
  const [loadingTryoutHistory, setLoadingTryoutHistory] = useState(false)

  const router = useRouter()
  const { tryout_success } = router.query 
  const handleClickOpenDialog = () => setOpen(true)
  const handleCloseDialog = () => setOpen(false)

  const [snackbarOpen, setSnackbarOpen] = useState(false)

  // Check if tryout_success is undefined and show Snackbar
  useEffect(() => {
    if (typeof tryout_success !== 'undefined') {
      setSnackbarOpen(true)
    }
  }, [tryout_success])

  useEffect(() => {
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    setLoadingTryoutHistory(true)
    axios
      .get('https://code.tryoutx.com/api/user/tryout/history', {
        headers: {
          Authorization: 'Bearer ' + storedToken
        }
      })
      .then(response => {
        setLoadingTryoutHistory(false)
        setData(response.data.data)
      })
      .catch(error => {
        console.error('Error fetching data:', error)
        if (error.response.data.message == 'Have not subscribed') {
          router.push('/payment?not_subscribed=true')
        }
        router.reload()
      })
  }, [router])

  useEffect(() => {
    setRecentData(data[0])
  }, [data])

   useEffect(() => {
     if (dataRecent && dataRecent.pivot) {
       setSubToScore(dataRecent.pivot.sub_to_score)
     }
   }, [dataRecent])


  return loadingTryoutHistory ? (
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
      <CardHeader
        title={
          <Box sx={{ display: 'flex', alignItems: 'center', '& svg': { mr: 3 } }}>
            <Icon fontSize='1.25rem' icon='tabler:list-details' />
            <Typography>Tryout Kamu</Typography>
          </Box>
        }
      />
      <CardContent>
        <Timeline>
          <TimelineItem>
            <TimelineSeparator>
              <TimelineDot color='success' sx={{ mt: 1.5 }} />
              <TimelineConnector />
            </TimelineSeparator>
            <TimelineContent sx={{ pt: 0, mt: 0, mb: theme => `${theme.spacing(2)} !important` }}>
              <Typography variant='h6' sx={{ mr: 2, fontWeight: 'bold' }}>
                Terakhir Dikerjakan
              </Typography>
              <Typography variant='body2' sx={{ mb: 2.5 }}>
                Tryout terakhir yang kamu kerjakan
              </Typography>
              {data.length > 0 ? (
                <TableContainer component={Paper}>
                  <Table sx={{ minWidth: '100%' }} aria-label='simple table'>
                    <TableBody>
                      <TableRow
                        key={''}
                        sx={{
                          '&:last-of-type td, &:last-of-type th': {
                            border: 0
                          }
                        }}
                      >
                        <TableCell component='th' scope='row'>
                          <Box sx={{ display: 'inline-flex', alignContent: 'space-between', flexDirection: 'column' }}>
                            <Typography>
                              <b> {dataRecent?.title ? dataRecent.title : null}</b>
                            </Typography>
                            <Typography variant='caption'>
                              {dataRecent?.pivot?.sum_false ? dataRecent.pivot.sum_false : null} salah |&nbsp;
                              {dataRecent?.pivot?.sum_true ? dataRecent.pivot.sum_true : null} benar
                            </Typography>
                          </Box>
                        </TableCell>
                        <TableCell align='right'>
                          <Typography variant='caption'>
                            Nilai: {dataRecent?.pivot?.score ? dataRecent.pivot.score : null}
                          </Typography>
                        </TableCell>

                        <TableCell align='right'>
                          <Link component='button' onClick={handleClickOpenDialog}>
                            Review
                          </Link>
                        </TableCell>
                      </TableRow>
                    </TableBody>
                  </Table>
                </TableContainer>
              ) : (
                <Box sx={{ display: 'flex', justifyContent: 'center', alignItems: 'center', minHeight: 100 }}>
                  <Typography align='center'>
                    Kamu belum mengerjakan tryout, Silahkan kerjakan terlebih dahulu!
                  </Typography>
                </Box>
              )}
            </TimelineContent>
          </TimelineItem>

          <TimelineItem>
            <TimelineSeparator>
              <TimelineDot color='primary' />
              <TimelineConnector />
            </TimelineSeparator>
            <TimelineContent sx={{ mt: 0, mb: theme => `${theme.spacing(2)} !important` }}>
              <Box
                sx={{
                  mb: 0.5,
                  display: 'flex',
                  flexWrap: 'wrap',
                  alignItems: 'center',
                  justifyContent: 'space-between'
                }}
              >
                <Typography variant='h6' sx={{ mr: 2, fontWeight: 'bold' }}>
                  Sudah Dikerjakan
                </Typography>
              </Box>
              <Typography variant='body2'>Tryout yang kamu sudah kerjakan</Typography>
              <TryoutSudahDikerjakanTable props={data.slice(1)} />
            </TimelineContent>
          </TimelineItem>

          <TimelineItem>
            <TimelineSeparator>
              <TimelineDot color='error' />
              <TimelineConnector />
            </TimelineSeparator>
            <TimelineContent sx={{ mt: 0, mb: theme => `${theme.spacing(2)} !important` }}>
              <Box
                sx={{
                  mb: 0.5,
                  display: 'flex',
                  flexWrap: 'wrap',
                  alignItems: 'center',
                  justifyContent: 'space-between'
                }}
              >
                <Typography variant='h6' sx={{ mr: 2, fontWeight: 'bold' }}>
                  Belum Dikerjakan
                </Typography>
              </Box>
              <Typography variant='body2' sx={{ mb: 2.5 }}>
                Tryout yang kamu belum kerjakan
              </Typography>
              <TryoutBelumDikerjakanTable />
            </TimelineContent>
          </TimelineItem>
        </Timeline>
      </CardContent>
      <ReviewDialog
        handleClose={handleCloseDialog}
        open={open}
        user_pkg_id={dataRecent?.pivot?.user_pkg_id}
        subToData={subToScore}
      />
      <Snackbar
        open={snackbarOpen}
        autoHideDuration={6000} // Adjust the duration as needed
        onClose={() => setSnackbarOpen(false)}
        message='Tryout Selesai, Silahkan Cek Hasil Tryoutmu'
        anchorOrigin={{ vertical: 'top', horizontal: 'center' }}
      />
    </Card>
  ) 
}

export default TryoutHistory
