import React, { useState, useEffect } from 'react'
import { Typography } from '@mui/material'

// ** Axios
import axios from 'axios'

import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

import { useRouter } from 'next/router'

const Timer = ({ user_pkg_id }) => {
  const [endTime, setEndTime] = useState(null)
  const [remainingTime, setRemainingTime] = useState(null)
  const router = useRouter()

  useEffect(() => {
    const fetchTimerData = async () => {
      try {
        const cookies = new Cookies()
        const storedToken = cookies.get(authConfig.storageTokenKeyName)
        const response = await axios.post(
          'https://code.tryoutx.com/api/user/tryout/check',
          { user_pkg_id: user_pkg_id },
          {
            headers: {
              Authorization: 'Bearer ' + storedToken
            }
          }
        )
        const serverEndTime = new Date(response.data.message)
        serverEndTime.setHours(serverEndTime.getHours() + 7)
        setEndTime(serverEndTime)
      } catch (error) {
        console.error('Error fetching data:', error)
      }
    }
    fetchTimerData()
  }, [user_pkg_id])

  useEffect(
    () => {
      if (remainingTime < 0) {
        router.reload()
      }
    },
    [remainingTime, router]
  )

  useEffect(() => {
    if (endTime) {
      const updateRemainingTime = () => {
        const currentTime = new Date().getTime()
        const timeRemaining = endTime - currentTime
        setRemainingTime(timeRemaining)
      }
      updateRemainingTime()
      const timerInterval = setInterval(updateRemainingTime, 1000)
      return () => {
        clearInterval(timerInterval)
      }
    }
  }, [endTime])

  return (
    <Typography sx={{fontWeight:'bold'}}>
      Waktu Tersisa: {Math.floor(remainingTime / 60000)}:
      {Math.floor((remainingTime % 60000) / 1000) < 10
        ? '0' + Math.floor((remainingTime % 60000) / 1000)
        : Math.floor((remainingTime % 60000) / 1000)}
      &nbsp;detik
    </Typography>
  )
}

export default Timer
