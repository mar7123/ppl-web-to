// ** MUI Imports
import { Box } from '@mui/system'

import PaymentDetails from 'src/views/payment/PaymentDetails'
import PaymentEntry from 'src/views/payment/PaymentEntry'
import { useRouter } from 'next/router'



const PaymentPage = () => {
  const router = useRouter()

  const { not_subscribed } = router.query

  return (
    <Box sx={{ display: 'flex', justifyContent: 'center', alignItems: 'center', minWidth: '75%', minHeight: '75%' }}>
      {not_subscribed ? <PaymentDetails /> : <PaymentEntry />}
    </Box>
  )
}

export default PaymentPage
