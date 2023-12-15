import Card from '@mui/material/Card'
import CardHeader from '@mui/material/CardHeader'
import CardContent from '@mui/material/CardContent'
import Box from '@mui/material/Box'
import { styled } from '@mui/material/styles'
import { Button, Divider, Typography } from '@mui/material'
import axios from 'axios'
import { useRouter } from 'next/router'

const ThankyouPayment = () => {
  const router = useRouter()
  return (
    <>
      <Box sx={{display:'flex', minWidth:'100%', minHeight:'80%', justifyContent:'center', alignItems:'center'}}>
        <Box>
          <Typography variant='h1' gutterBottom align='center' justifyContent={'center'}>
            Terimakasih!
          </Typography>
          <Typography variant='h4' align='center' justifyContent={'center'}>
            Sekarang kamu adalah member resmi dari TryoutX!
          </Typography>
          <Box sx={{ minWidth: '100%', display: 'flex', justifyContent: 'center', mt: 5 }}>
            <Button align='center' justifyContent='center' variant='contained' onClick={() => router.push('/home')}>
              Ke Homescreen
            </Button>
          </Box>
        </Box>
      </Box>
    </>
  )
}

export default ThankyouPayment
