import Grid from '@mui/material/Grid'
import DatePickerWrapper from 'src/@core/styles/libs/react-datepicker'

import TryoutHistory from 'src/views/tryout-history/TryoutHistory'
import Footer from 'src/views/footer/Footer'

const TryoutHistoryPage = () => {
  return (
    <>
      <DatePickerWrapper>
        <Grid container spacing={6}>
          <Grid item xs={3} lg={3}></Grid>
          <Grid item xs={12} lg={6}>
            <TryoutHistory />
          </Grid>
          <Grid item xs={3} lg={3}></Grid>
        </Grid>
      </DatePickerWrapper>
    </>
  )
}

export default TryoutHistoryPage
