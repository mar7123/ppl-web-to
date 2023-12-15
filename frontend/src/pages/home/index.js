// ** MUI Imports
import Card from '@mui/material/Card'
import Grid from '@mui/material/Grid'
import Typography from '@mui/material/Typography'
import CardHeader from '@mui/material/CardHeader'
import CardContent from '@mui/material/CardContent'
import { styled } from '@mui/material/styles'
import { useState, useEffect } from 'react'
import { useTheme } from '@mui/material/styles'
import useMediaQuery from '@mui/material/useMediaQuery'

// ** Axios
import axios from 'axios'

import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

import TryoutBerikutnyaTable from 'src/views/home/TryoutBerikutnyaTable'
import TryoutLainnyaTable from 'src/views/home/TryoutLainnyaTable'
import TryoutOnProgress from 'src/views/home/TryoutOnProgress'
import { useRouter } from 'next/router'


const Illustration = styled('img')(({ theme }) => ({
  right: 20,
  bottom: 0,
  position: 'absolute',
  [theme.breakpoints.down('sm')]: {
    right: 5,
    width: 110
  }
}))

const Home = () => {

  const [data, setData] = useState([])
  const [upcomingTryout, setUpcomingTryout] = useState([])
  const [onGoingTryout, setOnGoingTryout] = useState([])
  const [dataLoadingTryoutBerikutnya, setDataLoadingTryoutBerikutnya] = useState(false)
  const [dataLoadingTryoutLainnya, setDataLoadingTryoutLainnya] = useState(false)
  const router = useRouter()

  const theme = useTheme()
  const onlySmallScreen = useMediaQuery(theme.breakpoints.down('sm'))


   useEffect(() => {
     const cookies = new Cookies()
     const storedToken = cookies.get(authConfig.storageTokenKeyName)
     setDataLoadingTryoutBerikutnya(true)
     axios
       .get('https://code.tryoutx.com/api/user/tryout', {
         headers: {
           Authorization: 'Bearer ' + storedToken
         }
       })
       .then(response => {
         setData(response.data.data)
         setDataLoadingTryoutBerikutnya(false)
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
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    setDataLoadingTryoutLainnya(true)
    axios
      .get('https://code.tryoutx.com/api/user/tryout/upcoming', {
        headers: {
          Authorization: 'Bearer ' + storedToken
        }
      })
      .then(response => {
        setUpcomingTryout(response.data.data)
         setDataLoadingTryoutLainnya(false)
      })
      .catch(error => {
        console.error('Error fetching data:', error)
       router.reload()
      })
  }, [router])
  
  useEffect(() => {
     Object.entries(data).forEach(([key, array]) => {
       array.forEach(item => {
         item.pivot.sub_start != null ? setOnGoingTryout(item) : null
       })
     })
   }, [data])

          
  return (
    <>
      <Grid container spacing={6}>
        <Grid item xs={12}>
          <Card sx={{ position: 'relative' }}>
            <CardContent>
              <Typography variant='h5' sx={{ mb: 0.5 }}>
                Selamat Datang 🎉
              </Typography>
              <Typography sx={{ mb: 2, color: 'text.secondary' }}>Member of TryoutX</Typography>
              <Typography variant='h4' sx={{ mb: 0.5, color: 'primary.main' }}>
                Ayo belajar bersama TryoutX!
              </Typography>

              <Illustration
                sx={{ display: onlySmallScreen ? 'none' : 'block' }}
                width={110}
                alt='congratulations john'
                src='/images/cards/congratulations-john.png'
              />
            </CardContent>
          </Card>
        </Grid>
        {onGoingTryout.length != 0 ? (
          <Grid item xs={12}>
            <Card sx={{ position: 'relative' }}>
              <CardContent>
                <Typography variant='h5' sx={{ mb: 0.5 }}>
                  Ongoing Tryout
                </Typography>
                <Typography sx={{ mb: 2, color: 'text.secondary' }}>Yuk Selesaikan Dulu Tryout kamu!</Typography>
                <TryoutOnProgress data={onGoingTryout} />
              </CardContent>
            </Card>
          </Grid>
        ) : null}
        <Grid item xs={12} lg={6}>
          <Card>
            <CardHeader title='Tryout Kamu'></CardHeader>
            <CardContent>
              <Typography sx={{ mb: 2 }}>Tryout yang kamu bisa kerjakan sekarang</Typography>
              <TryoutBerikutnyaTable
                data={data}
                onGoingCheck={onGoingTryout.length != 0 ? true : false}
                dataLoading={dataLoadingTryoutBerikutnya}
              />
            </CardContent>
          </Card>
        </Grid>
        <Grid item xs={12} lg={6}>
          <Card>
            <CardHeader title='Upcoming Tryout'></CardHeader>
            <CardContent>
              <Typography sx={{ mb: 2 }}>Tryout lainnya yang akan datang</Typography>
              <TryoutLainnyaTable data={upcomingTryout} dataLoading={dataLoadingTryoutLainnya} />
            </CardContent>
          </Card>
        </Grid>
      </Grid>
    </>
  )
}


export default Home
