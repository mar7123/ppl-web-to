// ** React Imports
import { Fragment, useState } from 'react'

// ** MUI Imports
import Alert from '@mui/material/Alert'
import Button from '@mui/material/Button'
import Snackbar from '@mui/material/Snackbar'

// ** Hook Import
import { useSettings } from 'src/@core/hooks/useSettings'

const SnackbarAlert = ({ openSnackbar, message, handleClose }) => {
  // ** State
  const [open, setOpen] = useState(false)
  // ** Hook & Var
  const { settings } = useSettings()
  const { skin } = settings

  return (
    <Fragment>
      <Snackbar
        open={openSnackbar || open}
        anchorOrigin={{ vertical: 'top', horizontal: 'center' }}
        autoHideDuration={3000}
        onClose={handleClose}
      >
        <Alert
          onClose={handleClose}
          variant='filled'
          severity='error'
          sx={{ width: '100%' }}
          elevation={skin === 'bordered' ? 0 : 3}
        >
          {message ? message : 'no message'}
        </Alert>
      </Snackbar>
    </Fragment>
  )
}

export default SnackbarAlert
