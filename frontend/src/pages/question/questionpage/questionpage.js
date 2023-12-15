import Card from '@mui/material/Card'
import CardContent from '@mui/material/CardContent'
import Grid from '@mui/material/Grid'
import FormLabel from '@mui/material/FormLabel'
import RadioGroup from '@mui/material/RadioGroup'
import FormControl from '@mui/material/FormControl'
import MuiRadio from '@mui/material/Radio'
import FormControlLabel from '@mui/material/FormControlLabel'
import CardHeader from '@mui/material/CardHeader'
import Checkbox from '@mui/material/Checkbox'
import { useState } from 'react'
import Box from '@mui/material/Box'
import Table from '@mui/material/Table'
import TableRow from '@mui/material/TableRow'
import TableHead from '@mui/material/TableHead'
import TableBody from '@mui/material/TableBody'
import TableCell from '@mui/material/TableCell'
import TableContainer from '@mui/material/TableContainer'

// ** Icon Imports
import Icon from 'src/@core/components/icon'
import { Typography } from '@mui/material'

const Radio = props => {
  return (
    <MuiRadio
      {...props}
      disableRipple={true}
      sx={{ '& svg': { height: 18, width: 18 } }}
      checkedIcon={
        <svg width='24' height='24' viewBox='0 0 24 24'>
          <path fill='currentColor' d='M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z' />
        </svg>
      }
      icon={
        <svg width='24' height='24' viewBox='0 0 24 24'>
          <path fill='currentColor' d='M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20' />
        </svg>
      }
    />
  )
}

const QuestionPage = ({ props, selectedOption,selectedOptionValue, onRadioChange, onRadioChangeQ2, title, onFlagChange, flag, onCheckChange }) => {
  const [checkedOptions, setCheckedOptions] = useState([])
  const [radioValues, setRadioValues] = useState(selectedOptionValue)
  
  const handleRadioChange = event => {
    const value = event.target.value
    onRadioChange(value) 
  }

  const handleRadioChangeQuestionType2 = (index, value) => {
    const newRadioValues = [...radioValues]
    newRadioValues[index] = value
    setRadioValues(newRadioValues)
    onRadioChangeQ2(newRadioValues)
  }

  const handleCheckboxChange = choiceId => {
    const updatedCheckedOptions = checkedOptions.includes(choiceId)
      ? checkedOptions.filter(item => item !== choiceId)
      : [...checkedOptions, choiceId]

    setCheckedOptions(updatedCheckedOptions)
    onCheckChange(updatedCheckedOptions)
  }

  const handleCheckChange = event => {
    const newCheckValue = event.target.checked
    onFlagChange(newCheckValue)
  }

  return props.question_type == 0 ? (
    <>
      <Card>
        <CardHeader title={title}> </CardHeader>
        <CardContent>
          <Grid container spacing={6}>
            <Grid item xs={12} lg={12} dangerouslySetInnerHTML={{ __html: props.question_desc }}></Grid>
            <Grid item xs={12} lg={12}>
              <FormControl>
                <FormLabel component='legend'>
                  <b>Pilihlah jawaban yang tepat : </b>
                </FormLabel>
                <RadioGroup
                  value={selectedOption}
                  onChange={handleRadioChange}
                  name='customized-radios'
                  aria-checked={selectedOption}
                >
                  {props.question_choices.map(choices => {
                    return (
                      <FormControlLabel
                        sx={{ mb: 6 }}
                        key={choices.choice_id}
                        value={choices.choice_id}
                        control={<Radio />}
                        label={<Typography dangerouslySetInnerHTML={{ __html: choices.choice_desc }} />}
                      />
                    )
                  })}
                </RadioGroup>
              </FormControl>
            </Grid>
            <Grid item xs={12}>
              <FormControl>
                <FormControlLabel
                  sx={{ display: 'flex', justifyContent: 'center' }}
                  checked={flag}
                  onChange={handleCheckChange}
                  inputProps={{ 'aria-label': 'controlled' }}
                  control={<Checkbox />}
                  label='Ragu-ragu'
                  labelPlacement='end'
                />
              </FormControl>
            </Grid>
          </Grid>
        </CardContent>
      </Card>
    </>
  ) : props.question_type == 1 ? (
    <>
      <Card>
        <CardHeader title={title}></CardHeader>
        <CardContent>
          <Grid container spacing={6}>
            <Grid item xs={12} lg={12} dangerouslySetInnerHTML={{ __html: props.question_desc }}></Grid>
            <Grid item xs={12} lg={12}>
              <FormControl>
                <FormLabel component='legend'>
                  <b>Pilihlah jawaban yang tepat : </b>
                </FormLabel>
                {props.question_choices.map(choices => {
                  return (
                    <FormControlLabel
                      key={choices.choice_id}
                      control={
                        <Checkbox
                          checked={
                            selectedOption.includes(choices.choice_id) || checkedOptions.includes(choices.choice_id)
                              ? true
                              : false
                          }
                          onChange={() => handleCheckboxChange(choices.choice_id)}
                        />
                      }
                      label={<Typography dangerouslySetInnerHTML={{ __html: choices.choice_desc }}></Typography>}
                    />
                  )
                })}
              </FormControl>
            </Grid>
            <Grid item xs={12}>
              <FormControl>
                <FormControlLabel
                  sx={{ display: 'flex', justifyContent: 'center' }}
                  checked={flag}
                  onChange={handleCheckChange}
                  inputProps={{ 'aria-label': 'controlled' }}
                  control={<Checkbox />}
                  label='Ragu-ragu'
                  labelPlacement='end'
                />
              </FormControl>
            </Grid>
          </Grid>
        </CardContent>
      </Card>
    </>
  ) : props.question_type == 2 ? (
    <>
      <Card>
        <CardHeader title={title}> </CardHeader>
        <CardContent>
          <Grid container spacing={6}>
            <Grid item xs={12} lg={12} dangerouslySetInnerHTML={{ __html: props.question_desc }}></Grid>
            <Grid item xs={12} lg={12}>
              <TableContainer>
                <Table aria-label='simple table'>
                  <TableHead>
                    <TableRow s>
                      <TableCell align='center'>
                        <b>Pertanyaan</b>
                      </TableCell>
                      <TableCell align='center'>
                        <b>Benar / Salah</b>
                      </TableCell>
                    </TableRow>
                  </TableHead>
                  <TableBody>
                    {props.question_choices.map((row, index) => (
                      <TableRow key={row.choice_id}>
                        <TableCell align='left'>
                          <Typography dangerouslySetInnerHTML={{ __html: row.choice_desc }}></Typography>
                        </TableCell>
                        <TableCell>
                          <FormControl row={true}>
                            <RadioGroup>
                              <FormControlLabel
                                value={1}
                                onChange={() => handleRadioChangeQuestionType2(index, 1)}
                                control={<Radio checked={radioValues[index] === 1} />}
                                label={
                                  <>
                                    <Box sx={{ display: 'flex' }}>
                                      <Typography>BENAR</Typography>
                                    </Box>
                                  </>
                                }
                              />
                              <FormControlLabel
                                value={0}
                                onChange={() => handleRadioChangeQuestionType2(index, 0)}
                                control={<Radio checked={radioValues[index] === 0} />}
                                label={
                                  <>
                                    <Box sx={{ display: 'flex' }}>
                                      <Typography>SALAH</Typography>
                                    </Box>
                                  </>
                                }
                              />
                            </RadioGroup>
                          </FormControl>
                        </TableCell>
                      </TableRow>
                    ))}
                  </TableBody>
                </Table>
              </TableContainer>
            </Grid>
            <Grid item xs={12}>
              <FormControl>
                <FormControlLabel
                  sx={{ display: 'flex', justifyContent: 'center' }}
                  checked={flag}
                  onChange={handleCheckChange}
                  inputProps={{ 'aria-label': 'controlled' }}
                  control={<Checkbox />}
                  label='Ragu-ragu'
                  labelPlacement='end'
                />
              </FormControl>
            </Grid>
          </Grid>
        </CardContent>
      </Card>
    </>
  ) : (
    <Typography>Question is not detected please refresh</Typography>
  )
}

export default QuestionPage
