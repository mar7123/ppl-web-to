// ** MUI Imports
import Box from '@mui/material/Box'
import Typography from '@mui/material/Typography'
import { Grid } from '@mui/material'
import Divider from '@mui/material/Divider'

import Icon from 'src/@core/components/icon'

const ToPackage = ({smallScreen}) => {
  return (
    <Grid container spacing={2} justifyContent='center' alignItems='center' sx={{ mt: 2, mb: 2 }}>
      <Grid item xs={12}>
        <Box
          sx={{
            display: 'flex',
            flexDirection: 'column',
            mt: 2
          }}
        >
          <Box
            sx={{
              display: smallScreen ? null : 'flex',
              width: '100%',
              justifyContent: 'space-between',
              alignItems: 'center'
            }}
          >
            <Typography align='center' variant='h4' sx={{ fontWeight: 'bold', maxWidth: 300, minWidth: 300 }}>
              Penalaran Matematika
            </Typography>
            <Typography align='center' variant='subtitle1' sx={{ m: 5 }}>
              penalaran matematika adalah penalaran tentang dan dengan objek matematika yang diperlukan untuk menarik
              kesimpulan atau membuat suatu pernyataan baru yang benar berdasarkan pada beberapa pernyataan yang
              kebenarannya telah dibuktikan atau diasumsikan sebelumnya.
            </Typography>
            <Box sx={{ display: 'flex', alignItems: 'center', justifyContent: 'center' }}>
              <Box
                sx={{
                  display: 'flex',
                  flexDirection: 'column',
                  mr: 10,
                  alignItems: 'center',
                  justifyContent: 'center'
                }}
              >
                <Icon icon='tabler:alarm' fontSize='5rem' />
                <Typography variant='caption' align='center' sx={{ alignItems: 'center' }}>
                  Dengan Batas Waktu
                </Typography>
              </Box>

              <Box sx={{ display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center' }}>
                <Icon icon='tabler:book' fontSize='5rem' />
                <Typography variant='caption' align='center' sx={{ alignItems: 'center' }}>
                  Banyak Varian Soal
                </Typography>
              </Box>
            </Box>
          </Box>
        </Box>
        <Divider sx={{ m: 2 }} />
      </Grid>
      <Grid item xs={12}>
        <Box
          sx={{
            display: 'flex',
            flexDirection: 'column',
            mt: 2
          }}
        >
          <Box
            
            sx={{
              display: smallScreen ? null : 'flex',
              width: '100%',
              justifyContent: 'space-between',
              alignItems: 'center'
            }}
          >
            <Typography align='center' variant='h4' sx={{ fontWeight: 'bold', maxWidth: 300, minWidth: 300 }}>
              Tes Potensi Skolastik(TPS)
            </Typography>
            <Typography align='center' variant='subtitle1' sx={{ m: 5 }}>
              Tes Potensi Skolastik adalah jenis tes yang bertujuan untuk menguji kemampuan berpikir calon mahasiswa
              baru yaitu kemampuan untuk memahami dan bernalar yang diperlukan untuk seseorang dapat berhasil dalam
              pendidikan formal, khususnya pendidikan tinggi.
            </Typography>
            <Box sx={{ display: 'flex', alignItems: 'center', justifyContent: 'center' }}>
              <Box
                sx={{
                  display: 'flex',
                  flexDirection: 'column',
                  mr: 10,
                  alignItems: 'center',
                  justifyContent: 'center'
                }}
              >
                <Icon icon='tabler:alarm' fontSize='5rem' />
                <Typography variant='caption' align='center' sx={{ alignItems: 'center' }}>
                  Dengan Batas Waktu
                </Typography>
              </Box>

              <Box sx={{ display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center' }}>
                <Icon icon='tabler:book' fontSize='5rem' />
                <Typography variant='caption' align='center' sx={{ alignItems: 'center' }}>
                  Banyak Varian Soal
                </Typography>
              </Box>
            </Box>
          </Box>
        </Box>
        <Divider sx={{ m: 2 }} />
      </Grid>
      <Grid item xs={12}>
        <Box
          sx={{
            display: 'flex',
            flexDirection: 'column',
            mt: 2
          }}
        >
          <Box
            
            sx={{
              display: smallScreen ? null : 'flex',
              width: '100%',
              justifyContent: 'space-between',
              alignItems: 'center'
            }}
          >
            <Typography align='center' variant='h4' sx={{ fontWeight: 'bold', maxWidth: 300, minWidth: 300 }}>
              Literasi Bahasa Indonesia dan Bahasa Inggris
            </Typography>
            <Typography align='center' variant='subtitle1' sx={{ m: 5 }}>
              Tes Literasi Bahasa Inggris adalah tes dalam memahami bahasa asing (Inggris). Tes ini diujikan untuk
              melihat kemampuan Bahasa Inggris kamu sebagai calon mahasiswa yang penting untuk mendukung pembelajaran di
              jenjang selanjutnya. Tes ini akan menguji kemampuan kamu terkait pemahaman bacaan.
            </Typography>
            <Box sx={{ display: 'flex', alignItems: 'center', justifyContent: 'center' }}>
              <Box
                sx={{
                  display: 'flex',
                  flexDirection: 'column',
                  mr: 10,
                  alignItems: 'center',
                  justifyContent: 'center'
                }}
              >
                <Icon icon='tabler:alarm' fontSize='5rem' />
                <Typography variant='caption' align='center' sx={{ alignItems: 'center' }}>
                  Dengan Batas Waktu
                </Typography>
              </Box>

              <Box sx={{ display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center' }}>
                <Icon icon='tabler:book' fontSize='5rem' />
                <Typography variant='caption' align='center' sx={{ alignItems: 'center' }}>
                  Banyak Varian Soal
                </Typography>
              </Box>
            </Box>
          </Box>
        </Box>
      
      </Grid>
    </Grid>
  )
}

export default ToPackage
