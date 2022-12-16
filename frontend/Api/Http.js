const axios = require('axios')

export const Http = axios.create({
  withCredentials: true,
  timeout: 20000,
  headers: {
    'X-Requested-With': 'XMLHttpRequest',
    Accept: 'application/json',
    'Content-Type': 'application/json'
  }
})
