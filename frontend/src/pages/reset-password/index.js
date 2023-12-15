import ResetPassword from "src/views/reset-password/ResetPassword";
import BlankLayoutWithAppBar from "src/@core/layouts/BlankLayoutWithAppBar";
import { useState } from "react";
import { useRouter } from "next/router";
import SnackbarAlert from "src/views/shared-component/alert-snackbar/alertSnackbar";
import axios from "axios";



const ResetPasswordPage = () => {
    const router = useRouter()
    const [password, setPassword] = useState()
    const [confirmPassword, setConfirmPassword] = useState()
    const { token, email } = router.query
    const [openSnackbar, setOpenAlertSnackbar] = useState(false)
    const [message, setMessage] = useState('')
    const [loading, setLoading] = useState(false)
    const [success, setSuccess] = useState(false)

    const handleSubmit = e => {
        e.preventDefault()
        
        if (password === confirmPassword) {
            setLoading(true)
            axios
              .post('https://code.tryoutx.com/api/resetpass', { token: token, email: email, password : password })
                .then(response => {
                  setLoading(false)
                    console.log('success')
                    setSuccess(true)
              })
                .catch(error => {
                  setLoading(false)
                  console.error('Error fetching data:', error)
                  setMessage(error.response.data.errors.password[0])
                  setOpenAlertSnackbar(true)
                  
              })
        } else {
            console.log('password dont match')
            setMessage('Password tidak sama silahkan cek kembali')
            setOpenAlertSnackbar(true)
        }
     }
    
    const handlePasswordChange = (e) => {
        setPassword(e)
    }

    const handleConfirmPasswordChange = (e) => {
        setConfirmPassword(e)
    }

    //snackbar
    
  const handleClose = (event, reason) => {
    if (reason === 'clickaway') {
      return
    }
    setOpenAlertSnackbar(false)
  }

    return (
      <>
        <ResetPassword
          password={password}
          confirmPassword={confirmPassword}
          handlePassChange={handlePasswordChange}
          handleConfirmPassChange={handleConfirmPasswordChange}
                handleSubmitReset={handleSubmit}
                loading={loading}
                success={success}
        />
        <SnackbarAlert openSnackbar={openSnackbar} handleClose={handleClose} message={message} />
      </>
    )
}

ResetPasswordPage.getLayout = page => <BlankLayoutWithAppBar>{page}</BlankLayoutWithAppBar>
ResetPasswordPage.guestGuard = true
export default ResetPasswordPage