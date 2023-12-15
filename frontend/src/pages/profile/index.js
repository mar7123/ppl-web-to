// ** MUI Imports
import Grid from '@mui/material/Grid'
import DatePickerWrapper from 'src/@core/styles/libs/react-datepicker'


import ProfilePage from 'src/views/profile/Profile'


const Profile = () => {
  return (
    <>
      <DatePickerWrapper>
        <Grid container spacing={6}>
          <Grid item xs={3} lg={3}></Grid>
          <Grid item xs={12} lg={6}>
            <ProfilePage />
          </Grid>
          <Grid item xs={3} lg={3}></Grid>
        </Grid>
      </DatePickerWrapper>

    </>
  )
}

export default Profile
