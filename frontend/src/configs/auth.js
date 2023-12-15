const apiurl = 'https://code.tryoutx.com'
export default {
  meEndpoint: apiurl + '/api/user',
  loginEndpoint: apiurl + '/api/auth/login',
  registerEndpoint: '/jwt/register',
  logoutEndpoint: apiurl + '/api/logout',
  storageTokenKeyName: 'token',
//   onTokenExpiration: 'refreshToken' // logout | refreshToken
}
