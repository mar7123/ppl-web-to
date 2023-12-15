import Card from '@mui/material/Card'
import CardHeader from '@mui/material/CardHeader'
import CardContent from '@mui/material/CardContent'
import Box from '@mui/material/Box'
import { styled } from '@mui/material/styles'
import { Button, Divider, Typography } from '@mui/material'
import axios from 'axios'
import { useRouter } from 'next/router'
import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

const PaymentEntry = () => {
  const router = useRouter()


  const handlePayment = () => {
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    axios
      .post(
        'https://code.tryoutx.com/api/payments',
        { descirption: 'Member TryoutX', amount: 35000 },
        {
          headers: {
            Authorization: 'Bearer ' + storedToken
          }
        }
      )
      .then(response => {
        router.replace(response.data.data)
      })
      .catch(error => {
        console.error('Error fetching data:', error)
      })
  }

  return (
    <>
      <Box sx={{ display: 'flex', minWidth: '100%', minHeight: '80%', justifyContent: 'center', alignItems: 'center' }}>
        <Box>
          <Typography variant='h1' gutterBottom align='center' justifyContent={'center'}>
            Selangkah Untuk Menjadi Member TryoutX
          </Typography>
          <Typography variant='h4' align='center' justifyContent={'center'}>
            Nikmati Tryout dengan kurikulum terkini dengan pembobotan nilai yang teruji dan sesusai dengan Kemendikbud
          </Typography>
          <Box sx={{ minWidth: '100%', display: 'flex', justifyContent: 'center', mt: 5 }}>
            <Button align='center' justifyContent='center' variant='contained' onClick={handlePayment}>
              Ke Pembayaran!
            </Button>
          </Box>
        </Box>
      </Box>
    </>
  )
}

export default PaymentEntry
