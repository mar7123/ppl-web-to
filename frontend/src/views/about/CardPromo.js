// ** MUI Imports
import Card from '@mui/material/Card'
import Button from '@mui/material/Button'
import Typography from '@mui/material/Typography'
import CardContent from '@mui/material/CardContent'
import { Box } from '@mui/material'
import { useRouter } from 'next/router'


// ** Icon Imports
import Icon from 'src/@core/components/icon'

// ** Custom Components Imports
import CustomAvatar from 'src/@core/components/mui/avatar'

const CardPromo = ({ smallScreen }) => {
  const router = useRouter()
  return smallScreen ? (
    <Box sx={{ bgcolor: '#3440eb', borderRadius: 10 }}>
      <Box
        sx={{
          display: 'flex',
          flexDirection: 'row'
        }}
      >
        <Box
          sx={{
            maxWidth: '70%',
            maxWidth: '200',
            ml: 7,
            display: 'flex',
            displayDirection: 'column',
            justifyContent: 'center',
            flexWrap: 'wrap',
            m: 10
          }}
        >
          <Typography variant='h6' sx={{ mb: 2.75, color: 'common.white', fontWeight: 'bold' }}>
            PROMO!! Cukup 450.000 Dengan bergabung member TryoutX, kamu sudah dapat:
          </Typography>
          <Typography variant='h5' sx={{ mb: 6, color: 'text.secondary', color: 'common.white' }}>
            <ul>
              <li>Doorprize dan Goodiebag untuk 200 peserta dengan nilai terbaik</li>
              <li>Mengetahui kapabilitas diri dan jurusan yang dituju</li>
              <li>Premium Tryout simulasi real online serta dapat pembahasannya</li>
              <li>Evaluasi bagian ilmu yang masih kurang</li>
              <li>Dapat gratis sesi konsultasi dan kelas offline di Salemba Group terdekat</li>
              <li>Konsultasi seumur hidup</li>
            </ul>
          </Typography>
          <Typography variant='h6' sx={{ mb: 6, color: 'common.white', fontWeight: 'bold' }}>
            hanya Rp. 45.000 Rp<s>450.000</s>
          </Typography>
          <Button
            onClick={() => router.push('/register')}
            variant='contained'
            sx={{ color: 'white', maxWidth: 200, ml: smallScreen ? 0 : 5 }}
          >
            DAFTAR SEKARANG!
          </Button>
        </Box>
      </Box>
    </Box>
  ) : (
    <Box sx={{ bgcolor: '#3440eb', borderRadius: 10 }}>
      <Box
        sx={{
          display: 'flex',
          flexDirection: 'row'
        }}
      >
        <Box
          sx={{
            maxWidth: '80%',
            minWidth: '50%',
            ml: 7,
            display: 'flex',
            flexDirection: 'column',
            m: 10
          }}
        >
          <Typography variant='h6' sx={{ mb: 2.75, color: 'common.white', fontWeight: 'bold' }}>
            PROMO!! Cukup 450.000 Dengan bergabung member TryoutX, kamu sudah dapat:
          </Typography>
          <Typography variant='h5' sx={{ mb: 6, color: 'text.secondary', color: 'common.white' }}>
            <ul>
              <li>Doorprize dan Goodiebag untuk 200 peserta dengan nilai terbaik</li>
              <li>Mengetahui kapabilitas diri dan jurusan yang dituju</li>
              <li>Premium Tryout simulasi real online serta dapat pembahasannya</li>
              <li>Evaluasi bagian ilmu yang masih kurang</li>
              <li>Dapat gratis sesi konsultasi dan kelas offline di Salemba Group terdekat</li>
              <li>Konsultasi seumur hidup</li>
            </ul>
          </Typography>
          <Typography variant='h6' sx={{ mb: 6, color: 'common.white', fontWeight: 'bold' }}>
            hanya Rp. 45.000 Rp<s>450.000</s>
          </Typography>
          <Button
            onClick={() => router.push('/register')}
            variant='contained'
            sx={{ color: 'white', maxWidth: 200, ml: 5 }}
          >
            DAFTAR SEKARANG!
          </Button>
        </Box>
        <Box
          sx={{
            display: 'flex',
            justifyContent: 'flex-end',
            minWidth: '40%',
            alignItems: 'flex-end',
            minHeight: '100%',
            alignContent: 'flex-end',
            mr: 10
          }}
        >
          <img src='/images/cards/imagePromo.png' width={400} height={400} alt='Picture of the author' />
        </Box>
      </Box>
    </Box>
  )
}

export default CardPromo
