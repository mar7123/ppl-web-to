import Box from '@mui/material/Box'
import Navigation from 'src/@core/layouts/components/horizontal/navigation'
import UserDropdown from 'src/@core/layouts/components/shared-components/UserDropdown'
import ModeToggler from 'src/@core/layouts/components/shared-components/ModeToggler'

const AppBarContent = props => {
  const { settings, horizontalNavItems, saveSettings } = props
  // const { hidden, settings, saveSettings, toggleNavVisibility } = props
  return (
    <Box sx={{ width: '100%', display: 'flex', alignItems: 'center', justifyContent: 'space-between' }}>
      <Navigation settings={settings} horizontalNavItems={horizontalNavItems} />
      {/* <UserDropdown settings={settings} /> */}
      <ModeToggler settings={settings} saveSettings={saveSettings} />
    </Box>
  )
}

export default AppBarContent
