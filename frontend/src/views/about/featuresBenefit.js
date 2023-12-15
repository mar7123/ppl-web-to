// ** MUI Imports
import Box from '@mui/material/Box'

import Typography from '@mui/material/Typography'

import { Grid } from '@mui/material'

const FeaturesBenefit = () => {
    return (
      <Grid container spacing={10}>
        <Grid item xs={12} lg={4}>
          <Box
            sx={{
              display: 'flex',
              alignItems: 'center',
              flexDirection: 'column'
            }}
          >
            <Box>
              <img src='/images/cards/image 43.png' width={200} height={200} alt='Picture of the author' />
            </Box>
            <Typography variant='h5' align='center' fontWeight='bold'>
              Conceptual clarity through visualisation
            </Typography>
          </Box>
        </Grid>
        <Grid item xs={12} lg={4}>
          <Box
            sx={{
              display: 'flex',
              alignItems: 'center',
              flexDirection: 'column'
            }}
          >
            <Box>
              <img src='/images/cards/image 44.png' width={200} height={200} alt='Picture of the author' />
            </Box>
            <Typography variant='h5' align='center' fontWeight='bold'>
              Personalised learning programs
            </Typography>
          </Box>
        </Grid>
        <Grid item xs={12} lg={4}>
          <Box
            sx={{
              display: 'flex',
              alignItems: 'center',
              flexDirection: 'column'
            }}
          >
            <Box>
              <img src='/images/cards/image 47.png' width={200} height={200} alt='Picture of the author' />
            </Box>
            <Typography variant='h5' align='center' fontWeight='bold'>
              Unmatched individual attention
            </Typography>
          </Box>
        </Grid>
      </Grid>
    )
}

export default FeaturesBenefit
