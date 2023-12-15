import Box from '@mui/material/Box'
import { Button } from '@mui/material'
import { useState, useEffect } from 'react'
import { SyntheticEvent } from 'react'

// ** MUI Imports
import QuestionPage from './questionpage/questionpage'
import { Typography } from '@mui/material'
import Dialog from '@mui/material/Dialog'
import DialogTitle from '@mui/material/DialogTitle'
import DialogContent from '@mui/material/DialogContent'
import DialogActions from '@mui/material/DialogActions'
import DialogContentText from '@mui/material/DialogContentText'
import Tab from '@mui/material/Tab'
import TabList from '@mui/lab/TabList'
import TabPanel from '@mui/lab/TabPanel'
import TabContext from '@mui/lab/TabContext'

// ** Axios
import axios from 'axios'

import Cookies from 'universal-cookie'

// ** Config
import authConfig from 'src/configs/auth'

import { useRouter } from 'next/router'

const QuestionPageIndex = () => {
  const router = useRouter()
  const itemsPerPage = 1 
  const [data, setData] = useState([])
  const [subTryout, setSubTryout] = useState([])
  const [tabChangeLoading, setTabChangeLoading] = useState(false)
  const [currentPage, setCurrentPage] = useState(1)
  const { user_pkg_id } = router.query
  const [selectedButtonIndex, setSelectedButtonIndex] = useState(null)
  const [loading, setLoading] = useState(false)
  const [value, setValue] = useState('1')

  const handleChange = (event, newValue) => {
     setValue(newValue)
  }

  useEffect(() => {
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    const user_pkg_id_data = { user_pkg_id: user_pkg_id }
    axios
      .post('https://code.tryoutx.com/api/user/tryout/sub', user_pkg_id_data, {
        headers: {
          Authorization: 'Bearer ' + storedToken
        }
      })
      .then(response => {
        setSubTryout(response.data.data)
        setValue(response.data.data[0].tryout_sub_id)
      })
      .catch(error => {
        console.error('Error fetching data:', error)
        router.reload()
      })
  }, [user_pkg_id, router])

  useEffect(() => {
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    const user_pkg_id_data = { user_pkg_id: user_pkg_id, tryout_sub_id: value }
    setTabChangeLoading(true)
    axios
      .post('https://code.tryoutx.com/api/user/tryout/questions', user_pkg_id_data, {
        headers: {
          Authorization: 'Bearer ' + storedToken
        }
      })
      .then(response => {
        const questionsData = response.data.data
        const initialSelectedOptions = {}

        questionsData.forEach(question => {
          const { question_id, pivot } = question
          const userAnswers = pivot.user_answers
        
          if (userAnswers.length > 0) {
            if (!initialSelectedOptions[question_id]) {
              initialSelectedOptions[question_id] = []
            }
            // Push user answers to the respective question_id array
            userAnswers.forEach(answer => {
              initialSelectedOptions[question_id].push(answer.choice_id)
            })
           
          } else {
            initialSelectedOptions[question_id] = null
          }
        })
        setSelectedOptions(initialSelectedOptions)
        setData(response.data.data)
        setTabChangeLoading(false)
      })
      .catch(error => {
        console.error('Error fetching data:', error)
        router.reload()
      })
  }, [router, value, user_pkg_id])
  
  const [selectedOptions, setSelectedOptions] = useState(() => {
      const initialSelectedOptions = {}
      return initialSelectedOptions
  })

  const startIndex = (currentPage - 1) * itemsPerPage
  const endIndex = startIndex + itemsPerPage
  const currentItems = data.slice(startIndex, endIndex)

  const handlePageChange = (newPage) => {
  const currentQuestion = data[currentPage - 1]
  if (currentQuestion) {
      setLoading(true)
      setCurrentPage(newPage)
      setLoading(false)
  } else {
    console.log('no more question to answered')
    }
  }
  
  const handleRadioChange = (questionIndex, option) => {
    setSelectedOptions(prevSelectedOptions => ({
      ...prevSelectedOptions,
      [questionIndex]: option
    }))
  }

  return (
    <>
      <TabContext value={value}>
        <TabList scrollButtons variant='scrollable' onChange={handleChange} aria-label='centered tabs example'>
          {subTryout.map(subTryout => {
            return <Tab key={subTryout.tryout_sub_id} value={subTryout.tryout_sub_id} label={subTryout.sub_title} />
          })}
        </TabList>
        {subTryout.map(subTryout => {
          return (
            <Box key={subTryout.tryout_sub_id}>
              <TabPanel value={subTryout.tryout_sub_id}>
                <Box sx={{ display: 'flex', displayDirection: 'rows', justifyContent: 'space-between' }}>
                  <Box>
                    <Typography>Soal No. {currentPage}</Typography>
                  </Box>
                </Box>

                {currentItems.map((question, index) => {
                  return (
                    <QuestionPage
                      key={question.question_id}
                      subTitle={subTryout.sub_title}
                      props={question}
                      index={startIndex + index + 1}
                      selectedOption={selectedOptions[question.question_id]}
                      onRadioChange={option => handleRadioChange(question.question_id, option)}
                      tabChangeLoading={tabChangeLoading}
                    />
                  )
                })}

                <Box
                  sx={{
                    display: 'flex',
                    dispayDirection: 'row',
                    justifyContent: 'space-between',
                    alignContent: 'center',
                    mt: 3
                  }}
                >
                  <Button
                    variant='contained'
                    sx={{ minWidth: 150 }}
                    onClick={() => {
                      handlePageChange(currentPage - 1)
                      setSelectedButtonIndex(currentPage - 2)
                    }}
                    disabled={currentPage === 1 || loading}
                  >
                    Previous
                  </Button>

                  <Button
                    sx={{ minWidth: 150 }}
                    variant='contained'
                    onClick={() => {
                      handlePageChange(currentPage + 1)
                      setSelectedButtonIndex(currentPage)
                    }}
                    disabled={endIndex >= data.length || loading}
                  >
                    Next
                  </Button>
                </Box>
                <Box
                  sx={{ display: 'flex', displayDirection: 'rows', justifyContent: 'center', mt: 2, flexWrap: 'wrap' }}
                >
                  {data.map((question, index) => {
                    const questionTrue = question.pivot.question_true
                    return (
                      <Button
                        key={index}
                        disabled={loading}
                        color={selectedButtonIndex === index ? 'primary' : questionTrue ? 'success' : 'error'}
                        variant={selectedButtonIndex === index ? 'contained' : 'contained'}
                        onClick={() => {
                          handlePageChange(index + 1)
                          setSelectedButtonIndex(index)
                        }}
                        sx={{ m: 2, minWidth: 50, maxWidth: 50 }}
                      >
                        {index + 1}
                      </Button>
                    )
                  })}
                </Box>
              </TabPanel>
            </Box>
          )
        })}
      </TabContext>
    </>
  )
}

export default QuestionPageIndex