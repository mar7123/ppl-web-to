import Box from '@mui/material/Box'
import { Button, getBottomNavigationUtilityClass } from '@mui/material'
import { useState, useEffect } from 'react'

// ** MUI Imports
import QuestionPage from './questionpage/questionpage'
import { Typography } from '@mui/material'
import Dialog from '@mui/material/Dialog'
import DialogTitle from '@mui/material/DialogTitle'
import DialogContent from '@mui/material/DialogContent'
import DialogActions from '@mui/material/DialogActions'
import DialogContentText from '@mui/material/DialogContentText'
import Timer from './questionpage/timer'


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
  const [currentPage, setCurrentPage] = useState(1)
  const [open, setOpen] = useState(false)
  const handleClickOpen = () => setOpen(true)
  const handleClose = () => setOpen(false)
  const { user_pkg_id } = router.query
  const [selectedButtonIndex, setSelectedButtonIndex] = useState(null)
  const [loading, setLoading] = useState(false)
  const [title, setTitle] = useState('')
  const [fetchData, setFectchData] = useState(false)

  useEffect(() => {
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    const user_pkg_id_data = { user_pkg_id: user_pkg_id }
    axios
      .post('https://code.tryoutx.com/api/user/tryout/questions', user_pkg_id_data, {
        headers: {
          Authorization: 'Bearer ' + storedToken
        }
      })
      .then(response => {
        const questionsData = response.data.data
        setTitle(response.data.tryout_sub.sub_title)
        const initialSelectedOptions = {}
        const initialSelectedOptionsValue = {}
        const initialFlagQuestion = {}
        questionsData.forEach((question, index) => {
          const { question_id, pivot } = question
          const userAnswers = pivot.user_answers
          const flagQuestionCheck = pivot.flag_question
          initialFlagQuestion[question_id] = flagQuestionCheck
          if (question.question_type == 2) {
            initialSelectedOptions[question_id] = []
            question.question_choices.forEach(answer => {
              initialSelectedOptions[question_id].push(answer.choice_id)
            })
            if (userAnswers.length > 0) {
              if (!initialSelectedOptionsValue[question_id]) {
                initialSelectedOptionsValue[question_id] = []
              }
              userAnswers.forEach(answer => {
                initialSelectedOptionsValue[question_id].push(answer.choice_val)
              })
            } else {
              initialSelectedOptionsValue[question_id] = []
              question.question_choices.forEach(answer => {
                initialSelectedOptionsValue[question_id].push(null)
              })
            }
          } else {
            if (userAnswers.length > 0) {
              if (!initialSelectedOptions[question_id]) {
                initialSelectedOptions[question_id] = []
              }
              initialSelectedOptionsValue[question_id] = []
              userAnswers.forEach(answer => {
                initialSelectedOptions[question_id].push(answer.choice_id)
                initialSelectedOptionsValue[question_id].push(1)
              })
            } else {
              initialSelectedOptions[question_id] = []
              initialSelectedOptionsValue[question_id] = []
            }
          }
        })
        setSelectedButtonIndex(currentPage-1)
        setSelectedOptions(initialSelectedOptions)
        setSelectedOptionsValue(initialSelectedOptionsValue)
        setFlagQuestion(initialFlagQuestion)
        setData(response.data.data)
        setFectchData(false)
      })
      .catch(error => {
        console.error('Error fetching data:', error)
      })
  }, [router, user_pkg_id, fetchData])
  
  const [selectedOptions, setSelectedOptions] = useState(() => {
      const initialSelectedOptions = {}
      return initialSelectedOptions
  })

  const [selectedOptionsValue, setSelectedOptionsValue] = useState(() => {
      const initialSelectedOptionsValue = {}
      return initialSelectedOptionsValue
  })

  const [flagQuestion, setFlagQuestion] = useState(() => {
    const initialFlagQuestion = {}
    return initialFlagQuestion
  })

  const startIndex = (currentPage - 1) * itemsPerPage
  const endIndex = startIndex + itemsPerPage
  const currentItems = data.slice(startIndex, endIndex)

  const handlePageChange = (newPage) => {
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    const currentQuestion = data[currentPage - 1]
    const userAnswer = selectedOptions[currentQuestion.question_id].length > 0 ? (selectedOptions[currentQuestion.question_id]) : []
    const userAnswerVal = []
    if (currentQuestion.question_type == 2) {
      userAnswerVal.push(...selectedOptionsValue[currentQuestion.question_id])
    } else {
      selectedOptions[currentQuestion.question_id].forEach(data => {
        userAnswerVal.push(1)
      })
    }
    const flag = flagQuestion[currentQuestion.question_id] 
    if (currentQuestion) {
      setLoading(true)
      const postData = {
        user_pkg_id: user_pkg_id,
        question_id: currentQuestion.question_id,
        choice_id: userAnswer,
        choice_val: userAnswerVal,
        flag_question: flag == true ? 1 : 0
      }
      axios
        .post('https://code.tryoutx.com/api/user/tryout/answer', postData, {
          headers: {
            Authorization: 'Bearer ' + storedToken
          }
        })
        .then(response => {
          setCurrentPage(newPage)
          setLoading(false)
        })
        .catch(error => {
          console.error('Error question', error)
          setLoading(false)
        })
    } else {
      console.log('no more question to answered')
    }
  }
  
  const handleRadioChange = (questionIndex, option) => {
    setSelectedOptions(prevSelectedOptions => ({
      ...prevSelectedOptions,
      [questionIndex]: [parseInt(option)]
    }))
    setSelectedOptionsValue(prevSelectedOptionsValue => ({
      ...prevSelectedOptionsValue,
      [questionIndex]: [1]
    }))
  }

  const handleRadioChangeQuestionType2 = (questionIndex, option) => {
    setSelectedOptionsValue(prevSelectedOptionsValue => ({
      ...prevSelectedOptionsValue,
      [questionIndex]: option
    }))
  }

  const handleCheckChange = (questionIndex, option) => {
    setSelectedOptions(prevSelectedOptions => ({
      ...prevSelectedOptions,
      [questionIndex]: option
    }))
    setSelectedOptionsValue(prevSelectedOptionsValue => ({
      ...prevSelectedOptionsValue,
      [questionIndex]: [1]
    }))
  }

  const handleFlagChange = (questionIndex, checked) => {
    setFlagQuestion(prevFlagQuestion => ({
      ...prevFlagQuestion,
      [questionIndex]: checked
    }))
  }

  const handleSubmit = () => {
    setLoading(true)
    setSelectedOptions({}) 
    setCurrentPage(1) 
    const cookies = new Cookies()
    const storedToken = cookies.get(authConfig.storageTokenKeyName)
    const currentQuestion = data[currentPage - 1]
    const userAnswer = selectedOptions[currentQuestion.question_id].length > 0 ? selectedOptions[currentQuestion.question_id] : []
    const userAnswerVal = []
    if (currentQuestion.question_type == 2) {
      userAnswerVal.push(...selectedOptionsValue[currentQuestion.question_id])
    } else {
      selectedOptions[currentQuestion.question_id].forEach(data => {
        userAnswerVal.push(1)
      })
    }
    if (currentQuestion) {
      const postData = {
        user_pkg_id: user_pkg_id,
        question_id: currentQuestion.question_id,
        choice_id: userAnswer,
        choice_val: userAnswerVal,
        flag_question: false
      }
      setLoading(true) 
      axios
        .post('https://code.tryoutx.com/api/user/tryout/answer', postData, {
          headers: {
            Authorization: 'Bearer ' + storedToken
          }
        })
        .then(() => {
          axios
            .post(
              'https://code.tryoutx.com/api/user/tryout/next',
              { user_pkg_id: user_pkg_id },
              {
                headers: {
                  Authorization: 'Bearer ' + storedToken
                }
              }
            )
            .then(response => {
              if (response.data.message === 'Tryout ended') {
                setLoading(false)
                router.push('/tryout-history?tryout_success=true')
                handleClose()
                console.log('tryout-selesai')
              } else {
                setLoading(false)
                setFectchData(true)
                handleClose()
                console.log('tryout-selesai')
              }
            })
            .catch(nextError => {
              setLoading(false)
              handleClose()
              console.error('Error in the second request', nextError)
              router.reload()
            })
        })
        .catch(error => {
          setLoading(false)
          handleClose()
          console.error('Error', error)
          
        })
    } else {
      console.log('No more questions to be answered')
    }
  }

  return (
    <>
      <Box sx={{ display: 'flex', displayDirection: 'rows', justifyContent: 'space-between', mb: 2 }}>
        <Box>
          <Typography>Soal No. {currentPage}</Typography>
        </Box>
        <Timer user_pkg_id={user_pkg_id} />
      </Box>

      {currentItems.map((question, index) => {
        return (
          <QuestionPage
            key={question.question_id}
            title={title}
            props={question}
            index={startIndex + index + 1}
            selectedOption={selectedOptions[question.question_id]}
            selectedOptionValue={selectedOptionsValue[question.question_id]}
            onRadioChange={option => handleRadioChange(question.question_id, option)}
            onRadioChangeQ2={option => handleRadioChangeQuestionType2(question.question_id, option)}
            onCheckChange={option => handleCheckChange(question.question_id, option)}
            flag={flagQuestion[question.question_id]}
            onFlagChange={checked => handleFlagChange(question.question_id, checked)}
          />
        )
      })}

      <Box
        sx={{ display: 'flex', dispayDirection: 'row', justifyContent: 'space-between', alignContent: 'center', mt: 3 }}
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
          variant='contained'
          sx={{ minWidth: 150 }}
          onClick={handleClickOpen}
          disabled={endIndex < data.length || loading}
        >
          Submit
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
      <Box sx={{ display: 'flex', displayDirection: 'rows', justifyContent: 'center', mt: 2, flexWrap: 'wrap' }}>
        {data.map((data, index) => {
          return (
            <Button
              key={index}
              disabled={loading}
              color={
                selectedButtonIndex === index
                  ? 'primary'
                  : flagQuestion[data.question_id] == true
                  ? 'warning'
                  : !selectedOptionsValue[data.question_id]?.includes(null) &&
                    selectedOptionsValue[data.question_id]?.length > 0
                  ? 'success'
                  : 'secondary'
              }
              variant={
                selectedButtonIndex === index
                  ? 'contained'
                  : !selectedOptionsValue[data.question_id]?.includes(null) &&
                    selectedOptionsValue[data.question_id].length > 0
                  ? 'contained'
                  : 'outlined'
              }
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

      <Dialog
        open={open}
        disableEscapeKeyDown
        aria-labelledby='alert-dialog-title'
        aria-describedby='alert-dialog-description'
        onClose={(event, reason) => {
          if (reason !== 'backdropClick') {
            handleClose()
          }
        }}
      >
        <DialogTitle id='alert-dialog-title'>PERHATIAN!</DialogTitle>
        <DialogContent>
          <DialogContentText id='alert-dialog-description'>
            Tolong Cek Kembali Jawaban Anda! Anda akan Menyelesaikan Sub-Tryout Ini dan Lanjut ke Sesi Selanjutnya!
            <br />
          </DialogContentText>
          <br />
          <DialogContentText id='alert-dialog-description'>Yakin Mengumpulkan ?</DialogContentText>
        </DialogContent>
        <DialogActions className='dialog-actions-dense'>
          <Button type='button' onClick={handleClose}>
            Tidak
          </Button>
          <Button type='button' disabled={loading} onClick={handleSubmit}>
            Yakin
          </Button>
        </DialogActions>
      </Dialog>
    </>
  )
}

export default QuestionPageIndex