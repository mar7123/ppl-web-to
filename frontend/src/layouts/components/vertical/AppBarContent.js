// ** MUI Imports
import Box from '@mui/material/Box'
import IconButton from '@mui/material/IconButton'
import { Typography } from '@mui/material'


// ** Icon Imports
import Icon from 'src/@core/components/icon'

// ** Components
import ModeToggler from 'src/@core/layouts/components/shared-components/ModeToggler'
import UserDropdown from 'src/@core/layouts/components/shared-components/UserDropdown'

import { useEffect, useState } from 'react'
import axios from 'axios'
import Cookies from 'universal-cookie'
import authConfig from 'src/configs/auth'


const AppBarContent = props => {

  const [data, setData] = useState({
    full_name : '',
    school: '',
    major: '',
  })

  useEffect(() => {
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    axios
      .get('https://code.tryoutx.com/api/user', {
        headers: {
          Authorization: 'Bearer ' + storedToken
        }
      })
      .then(response => {
        const userData = response.data
        setData({...data, 
          full_name : userData.full_name,
          school : userData.school,
          major : userData.major
        })
      })
      .catch(error => {
        console.log(error)
      })
  }, [])


  // ** Props
  const { hidden, settings, saveSettings, toggleNavVisibility } = props

  return (
    <Box sx={{ width: '100%', display: 'flex', alignItems: 'center', justifyContent: 'space-between' }}>
      <Box className='actions-left' sx={{ mr: 2, display: 'flex', justifyContent:'space-around', displayDirection:'row', minWidth:'100%' }}>
        {hidden ? (
          <IconButton color='inherit' sx={{ ml: -2.75 }} onClick={toggleNavVisibility}>
            <Icon fontSize='1.5rem' icon='tabler:menu-2' />
          </IconButton>
        ) : null}
        <Box alignContent={'center'}>
          NAMA: {data.full_name}
        </Box>
        <Box alignContent={'center'}>
          SEKOLAH: {data.school}
        </Box>
      </Box>
    </Box>
  )
}

export default AppBarContent
