// ** React Imports
import { createContext, useEffect, useState } from 'react'

// ** Next Import
import { useRouter } from 'next/router'

// ** Axios
import axios from 'axios'

import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

// ** Defaults
const defaultProvider = {
  user: null,
  loading: true,
  setUser: () => null,
  setLoading: () => Boolean,
  login: () => Promise.resolve(),
  logout: () => Promise.resolve()
}
const AuthContext = createContext(defaultProvider)

const AuthProvider = ({ children }) => {
  // ** States
  const [user, setUser] = useState(defaultProvider.user)
  const [loading, setLoading] = useState(defaultProvider.loading)

  // ** Hooks
  const router = useRouter()
  useEffect(() => {
    const initAuth = async () => {
      const cookies = new Cookies()
      const storedToken = cookies.get(authConfig.storageTokenKeyName)
      if (storedToken) {
       
        setLoading(true)
        await axios
          .get(authConfig.meEndpoint, {
            headers: {
              Authorization: 'Bearer ' + storedToken
            }
          })
          .then(async response => {
            setLoading(false)
            if (response.data.subscribed_at == null) {
              router.push('/payment')
            }
            setUser({ ...response.data })

          })
          .catch(() => {
            // localStorage.removeItem('userData')
            // localStorage.removeItem('refreshToken')
            // localStorage.removeItem('token')
            cookies.remove(authConfig.storageTokenKeyName, { path: '/' })
            setUser(null)
            setLoading(false)
            if (
              // authConfig.onTokenExpiration === 'logout' &&
              !router.pathname.includes('landing-page')
            ) {
              router.replace('/landing-page')
            }
          })
      } else {
        setLoading(false)
      }
    }
    initAuth()
    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, [])

  // 'https://code.tryoutx.com/api/auth/login'
  // authConfig.loginEndpoint

  const handleLogin = (params, errorCallback) => {
    axios
      .post(authConfig.loginEndpoint, params)
      .then(async response => {
        const cookies = new Cookies()
        // params.rememberMe ? window.localStorage.setItem(authConfig.storageTokenKeyName, response.data.token) : null
        params.rememberMe ? cookies.set(authConfig.storageTokenKeyName, response.data.token, { path: '/' }) : nul
        const returnUrl = router.query.returnUrl
     
      
        setUser({ ...response.data.userData })
        // params.rememberMe ? window.localStorage.setItem('userData', JSON.stringify(response.data.userData)) : null
        if (response.data.userData.subscribed_at === null) {
          const redirectURL = returnUrl && returnUrl !== '/payment' ? returnUrl : '/payment'
          router.replace(redirectURL)
        } else {
           const redirectURL = returnUrl && returnUrl !== '/' ? returnUrl : '/'
           router.replace(redirectURL)
        }
        
      })
      .catch(err => {
        if (errorCallback) errorCallback(err)
      })
  }

  const handleLogout = () => {
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    axios.get(authConfig.logoutEndpoint, {
      headers: {
        Authorization: 'Bearer ' + storedToken
      }
    })
    setUser(null)
    // window.localStorage.removeItem('userData')
    // window.localStorage.removeItem(authConfig.storageTokenKeyName)
    cookies.remove(authConfig.storageTokenKeyName, { path: '/' })
    router.push('/landing-page')
  }

  const values = {
    user,
    loading,
    setUser,
    setLoading,
    login: handleLogin,
    logout: handleLogout
  }

  return <AuthContext.Provider value={values}>{children}</AuthContext.Provider>
}

export { AuthContext, AuthProvider }
