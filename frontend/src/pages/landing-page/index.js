
import Typography from '@mui/material/Typography'

import Grid from '@mui/material/Grid'
import Box from '@mui/material/Box'

import LandingPageHeader from 'src/views/about/header'
import BlankLayoutWithAppBar from 'src/@core/layouts/BlankLayoutWithAppBar'
import CardFirst from 'src/views/about/CardFirst'
import CardSecond from 'src/views/about/CardSecond'
import CardThird from 'src/views/about/CardThird'
import FeaturesBenefit from 'src/views/about/featuresBenefit'
import ToPackage from 'src/views/about/toPackage'
import CardPromo from 'src/views/about/CardPromo'
import Article from 'src/views/about/Article'
import Footer from 'src/views/footer/Footer'
import { useTheme } from '@mui/material'
import useMediaQuery from '@mui/material/useMediaQuery'

const LandingPage = () => {
  const theme = useTheme()
  const smallScreen = useMediaQuery(theme.breakpoints.down('sm'))
  return (
    <>
      <Box sx={{ m: smallScreen ? 10 : 30 }}>
        <Grid container spacing={15} sx={{ mt: 5 }}>
          <Grid item xs={12} lg={12}>
            <LandingPageHeader />
          </Grid>
          <Grid item xs={12} lg={12}>
            <CardPromo smallScreen={smallScreen} />
          </Grid>
          {/* <Grid item xs={12} lg={6}>
            <CardFirst />
          </Grid> */}
          {/* <Grid item xs={12} lg={6}>
            <CardSecond />
            </Grid>
            <Grid item xs={12} lg={12}>
            <CardThird />
          </Grid> */}
          <Grid item xs={12} lg={12}>
            <FeaturesBenefit />
          </Grid>
          <Grid item xs={12} lg={12}>
            <ToPackage smallScreen={smallScreen} />
          </Grid>
        </Grid>
        <Grid item xs={12} lg={12}>
          <Article />
        </Grid>
      </Box>
      <Footer />
    </>
  )
}
LandingPage.getLayout = page => <BlankLayoutWithAppBar>{page}</BlankLayoutWithAppBar>
LandingPage.authGuard = false
export default LandingPage
