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


const PaymentDetails = () => {
  const [loading, setLoading] = useState(false)
  const router = useRouter()

  const handlePayment = () => {
     const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    setLoading(true)
     axios
       .post('https://code.tryoutx.com/api/payments',{descirption:'Member TryoutX', amount:35000 },  {
         headers: {
           Authorization: 'Bearer ' + storedToken
         }
       })
       .then(response => {
         router.replace(response.data.data)
         setLoading(false)
       })
       .catch(error => {
         console.error('Error fetching data:', error)
       })

  }

  return (
    <Card>
      <CardHeader title='Uh.. oh..'></CardHeader>
      <CardContent>
        <Box sx={{ display: 'flex', flexDirection: 'row', justifyContent: 'space-between', alignItems: 'center' }}>
          <Typography sx={{ m: 3 }}>
            Sepertinya kamu belum melakukan pembayaran nih...
            <br />
            Yuk! Selesaikan pembayaran untuk mengakses TryoutX!
          </Typography>
        </Box>
        <Button variant='contained' fullWidth sx={{ m: 2 }} onClick={handlePayment}>
          Lanjut ke Pembayaran
        </Button>
      </CardContent>
    </Card>
  )
}

export default PaymentDetails
