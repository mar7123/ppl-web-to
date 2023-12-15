// ** Next Import
import Link from 'next/link'

import { useState } from 'react'

import axios from 'axios'

// ** MUI Components
import Button from '@mui/material/Button'
import Typography from '@mui/material/Typography'
import Box from '@mui/material/Box'
import useMediaQuery from '@mui/material/useMediaQuery'
import { styled, useTheme } from '@mui/material/styles'
import CircularProgress from '@mui/material/CircularProgress'

// ** Custom Component Import
import CustomTextField from 'src/@core/components/mui/text-field'

// ** Icon Imports
import Icon from 'src/@core/components/icon'

// ** Layout Import
import BlankLayout from 'src/@core/layouts/BlankLayout'

// ** Demo Imports
import FooterIllustrationsV2 from 'src/views/pages/auth/FooterIllustrationsV2'

// Styled Components
const ForgotPasswordIllustration = styled('img')(({ theme }) => ({
  zIndex: 2,
  maxHeight: 650,
  marginTop: theme.spacing(12),
  marginBottom: theme.spacing(12),
  [theme.breakpoints.down(1540)]: {
    maxHeight: 550
  },
  [theme.breakpoints.down('lg')]: {
    maxHeight: 500
  }
}))

const RightWrapper = styled(Box)(({ theme }) => ({
  width: '100%',
  [theme.breakpoints.up('md')]: {
    maxWidth: 450
  },
  [theme.breakpoints.up('lg')]: {
    maxWidth: 600
  },
  [theme.breakpoints.up('xl')]: {
    maxWidth: 750
  }
}))

const LinkStyled = styled(Link)(({ theme }) => ({
  display: 'flex',
  alignItems: 'center',
  textDecoration: 'none',
  justifyContent: 'center',
  color: theme.palette.primary.main,
  fontSize: theme.typography.body1.fontSize
}))



const ForgotPassword = () => {
  // ** Hooks
  const theme = useTheme()
  // ** Vars
  const hidden = useMediaQuery(theme.breakpoints.down('md'))
  
  const [email, setEmail] = useState('')
  const [loading, setLoading] = useState(false)
  const [success, setSuccess] = useState(false)

  const handleSubmit = (e) => {
    e.preventDefault()
    setLoading(true)
    axios
      .post('https://code.tryoutx.com/api/forgotpass', {email : email})
      .then(response => {
        console.log('success')
        setLoading(false)
        setSuccess(true)
      })
      .catch(error => {
        setLoading(false)
        console.error('Error fetching data:', error)
      })
  }

  return (
    <Box className='content-right' sx={{ backgroundColor: 'background.paper' }}>
      {!hidden ? (
        <Box
          sx={{
            flex: 1,
            display: 'flex',
            position: 'relative',
            alignItems: 'center',
            borderRadius: '20px',
            justifyContent: 'center',
            backgroundColor: 'customColors.bodyBg',
            margin: theme => theme.spacing(8, 0, 8, 8)
          }}
        >
          <ForgotPasswordIllustration
            alt='forgot-password-illustration'
            src={`/images/pages/auth-v2-forgot-password-illustration-${theme.palette.mode}.png`}
          />
          <FooterIllustrationsV2 />
        </Box>
      ) : null}
      <RightWrapper>
        {loading ? (
          <Box
            sx={{
              p: [6, 12],
              height: '100%',
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'center'
            }}
          >
            <CircularProgress />
          </Box>
        ) : success ? (
          <Box
            sx={{
              p: [6, 12],
              height: '100%',
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'center'
            }}
          >
            <Box sx={{ width: '100%', maxWidth: 400 }}>
              <Box sx={{ my: 6 }}>
                <Typography sx={{ mb: 1.5, fontWeight: 500, fontSize: '1.625rem', lineHeight: 1.385 }}>
                  Reset Password Terkirim ✔
                </Typography>
                <Typography sx={{ color: 'text.secondary' }}>
                  Sebuah email untuk mereset password sudah terkirim, Silahkan cek email mu!
                </Typography>
              </Box>
              <form noValidate autoComplete='off' onSubmit={e => handleSubmit(e)}>
                <Typography sx={{ color: 'text.secondary' }}>Belum terkirim? silahkan kirim ulang</Typography>
                <Button fullWidth type='submit' variant='contained' sx={{ mb: 4 }}>
                  Kirim Ulang
                </Button>
              </form>
              <Typography sx={{ display: 'flex', alignItems: 'center', justifyContent: 'center', '& svg': { mr: 1 } }}>
                <LinkStyled href='/login'>
                  <Icon fontSize='1.25rem' icon='tabler:chevron-left' />
                  <span>Back to login</span>
                </LinkStyled>
              </Typography>
            </Box>
          </Box>
        ) : (
          <Box
            sx={{
              p: [6, 12],
              height: '100%',
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'center'
            }}
          >
            <Box sx={{ width: '100%', maxWidth: 400 }}>
              <Box sx={{ my: 6 }}>
                <Typography sx={{ mb: 1.5, fontWeight: 500, fontSize: '1.625rem', lineHeight: 1.385 }}>
                  Forgot Password? 🔒
                </Typography>
                <Typography sx={{ color: 'text.secondary' }}>
                  Masukkan emailmu dan kami akan kirimkan instruksi lewat email kamu!
                </Typography>
              </Box>
              <form noValidate autoComplete='off' onSubmit={e => handleSubmit(e)}>
                <CustomTextField
                  fullWidth
                  autoFocus
                  type='email'
                  value={email}
                  onChange={e => {
                    setEmail(e.target.value)
                  }}
                  label='Email'
                  sx={{ display: 'flex', mb: 4 }}
                />
                <Button fullWidth type='submit' variant='contained' sx={{ mb: 4 }}>
                  Send reset link
                </Button>
                <Typography
                  sx={{ display: 'flex', alignItems: 'center', justifyContent: 'center', '& svg': { mr: 1 } }}
                >
                  <LinkStyled href='/login'>
                    <Icon fontSize='1.25rem' icon='tabler:chevron-left' />
                    <span>Kembali ke laman login</span>
                  </LinkStyled>
                </Typography>
              </form>
            </Box>
          </Box>
        )}
      </RightWrapper>
    </Box>
  )
}
ForgotPassword.getLayout = page => <BlankLayout>{page}</BlankLayout>
ForgotPassword.guestGuard = true

export default ForgotPassword
