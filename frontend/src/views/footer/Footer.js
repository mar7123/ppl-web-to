
import { Typography, Box } from '@mui/material'

const Footer = () => {
    return (
      <Box
        fullWidth
        sx={{
          color: 'white',
          bgcolor: 'black',
          display: 'flex',
          justifyContent: 'space-around',
          alignItems: 'center',
          displayDirection: 'column',
          p: 5,
          position: 'sticky'
        }}
      >
        <Box sx={{ display: 'flex', flexDirection: 'column' }}>
          <Typography color='white'>
            Yayasan Salemba Studi Group <br />
          </Typography>
          <Typography variant='caption' color='white'>
            Gedung i-Cell FTUI Universitas Indonesia, Depok
          </Typography>
          <Typography variant='caption' color='white' sx={{ mb: 2 }} >
          <img src='/images/footer/WhatsApp_icon.png' width={12} height={12} alt='Picture of the author' />
            <a target='_blank' style={{ color: 'white' }} href='https://wa.me/628567612915'>
             {' '} wa.me/628567612915 
            </a>
          </Typography>
          {/* <Typography variant='caption' color='white'>
            © Yayasan Salemba Studi Group | 2023
          </Typography> */}
        </Box>

        <Box sx={{ display: 'flex', flexDirection: 'column' }}>
          <Typography color='white'>Connect:</Typography>
          <Typography variant='caption' color='white' fontSize={12}>
            <img src='/images/footer/tiktok.png' width={14} height={14} alt='Picture of the author' /> Tiktok:{' '}
            <a target='_blank' style={{ color: 'white' }} href='https://www.tiktok.com/@tryoutxcom'>
              @tryoutx
            </a>
            <br />
          </Typography>
          <Typography variant='caption' color='white' fontSize={12}>
            <img src='/images/footer/instagram.png' width={14} height={14} alt='Picture of the author' /> Instagram:{' '}
            <a style={{ color: 'white' }} target='_blank' href='https://www.instagram.com/tryoutxcom/'>
              @tryoutx
            </a>
            <br />
          </Typography>
        </Box>
      </Box>
    )
}


export default Footer