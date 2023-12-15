// ** MUI Imports
import Card from '@mui/material/Card'
import Button from '@mui/material/Button'
import Typography from '@mui/material/Typography'
import CardContent from '@mui/material/CardContent'

// ** Icon Imports
import Icon from 'src/@core/components/icon'

// ** Custom Components Imports
import CustomAvatar from 'src/@core/components/mui/avatar'

const CardFirst = () => {
  return (
    <Card sx={{ bgcolor: '#ffd966' }}>
      <CardContent
        sx={{
          display: 'flex',
          textAlign: 'center',
          alignItems: 'center',
          flexDirection: 'column',
          p: theme => `${theme.spacing(9.75, 5, 9.25)} !important`
        }}
      >
        <Icon icon='tabler:user' fontSize='5rem' color='white' />
        <Typography variant='h4' sx={{ mb: 2.75, color: 'common.white' }}>
          Lorem Ipsum
        </Typography>
        <Typography variant='h5' sx={{ mb: 6, color: 'text.secondary', color: 'common.white', maxWidth: '75%' }}>
          According to us blisters are a very common thing and we come across them very often in our daily lives. It is
          a very common occurrence like cold or fever depending upon your lifestyle.
        </Typography>
      </CardContent>
    </Card>
  )
}

export default CardFirst
