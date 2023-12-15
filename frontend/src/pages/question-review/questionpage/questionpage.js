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
import CircularProgress from '@mui/material/CircularProgress'
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


const QuestionPage = ({ props, selectedOption, subTitle, tabChangeLoading }) => {
  const [checkedOptions, setCheckedOptions] = useState([])

  return tabChangeLoading ? (
    <>
      <Card sx={{ minHeight: 500, minWidth: '100%', display: 'flex', justifyContent: 'center', alignItems: 'center' }}>
        <CardContent>
          <CircularProgress />
        </CardContent>
      </Card>
    </>
  ) : props.question_type == 0 ? (
    <>
      <Card>
        <CardHeader title={subTitle}> </CardHeader>
        <CardContent>
          <Grid container spacing={6}>
            <Grid item xs={12} lg={6} dangerouslySetInnerHTML={{ __html: props.question_desc }}></Grid>
            <Grid item xs={12} lg={6}>
              <FormControl>
                <FormLabel component='legend'>
                  <b>Pilihlah jawaban yang tepat : </b>
                </FormLabel>
                <RadioGroup value={selectedOption} name='customized-radios' aria-checked={selectedOption}>
                  {props.question_choices.map((choices, index) => {
                    return (
                      <>
                        <FormControlLabel
                          key={choices.choice_id}
                          value={choices.choice_id}
                          control={<Radio />}
                          label={
                            <>
                              <Box sx={{ display: 'flex' }}>
                                <Typography dangerouslySetInnerHTML={{ __html: choices.choice_desc }}></Typography>
                              </Box>
                            </>
                          }
                        />
                        <Typography sx={{ ml: 11, mb: 6 }}>
                          <b>Penjelasan:</b>
                          <Typography
                            fontWeight='bold'
                            color={choices.true_answer == true ? 'green' : 'red'}
                            dangerouslySetInnerHTML={{ __html: choices.explanation }}
                          ></Typography>
                          <Typography color={choices.true_answer == true ? 'green' : 'red'}>
                            {choices.true_answer != true ? 'SALAH' : 'BENAR'}
                          </Typography>
                        </Typography>
                      </>
                    )
                  })}
                </RadioGroup>
              </FormControl>
            </Grid>
          </Grid>
        </CardContent>
      </Card>
    </>
  ) : props.question_type == 1 ? (
    <>
      <Card>
        <CardHeader title={subTitle}></CardHeader>
        <CardContent>
          <Grid container spacing={6}>
            <Grid item xs={12} lg={6} dangerouslySetInnerHTML={{ __html: props.question_desc }}></Grid>
            <Grid item xs={12} lg={6}>
              <FormControl>
                <FormLabel component='legend'>
                  <b>Pilihlah jawaban yang tepat : </b>
                </FormLabel>
                {props.question_choices.map(choices => {
                  const isSelected = Array.isArray(selectedOption)
                    ? selectedOption.includes(choices.choice_id) || checkedOptions.includes(choices.choice_id)
                    : false

                  return (
                    <>
                      <FormControlLabel
                        key={choices.choice_id}
                        control={<Checkbox checked={isSelected} />}
                        label={<Typography dangerouslySetInnerHTML={{ __html: choices.choice_desc }} />}
                      />
                      <Typography>
                        <b>Penjelasan: </b>
                        <Typography
                          color={choices.true_answer == true ? 'green' : 'red'}
                          dangerouslySetInnerHTML={{ __html: choices.explanation }}
                        ></Typography>
                        <Typography color={choices.true_answer == true ? 'green' : 'red'}>
                          {choices.true_answer != true ? 'SALAH' : 'BENAR'}
                        </Typography>
                      </Typography>
                    </>
                  )
                })}
              </FormControl>
            </Grid>
          </Grid>
        </CardContent>
      </Card>
    </>
  ) : props.question_type == 2 ? (
    <>
      <Card>
        <CardHeader title={subTitle}> </CardHeader>
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
                      <TableCell align='center'>
                        <b>Penjelasan</b>
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
                                control={<Radio checked={props.pivot.user_answers[index]?.choice_val === 1} />}
                                label={
                                  <>
                                    <Box sx={{ display: 'flex' }}>
                                      <Typography>BENAR</Typography>
                                    </Box>
                                  </>
                                }
                              />
                              <FormControlLabel
                                control={<Radio checked={props.pivot.user_answers[index]?.choice_val === 0} />}
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
                        <TableCell>
                          <Typography>
                            <b>Penjelasan:</b>
                            <Typography
                              fontWeight='bold'
                              color={row.true_answer == true ? 'green' : 'red'}
                              dangerouslySetInnerHTML={{ __html: row.explanation }}
                            ></Typography>
                            <Typography
                            
                              color={row.choice_val == props.pivot.user_answers[index].choice_val ? 'green' : 'red'}
                            >
                              {row.choice_val == props.pivot.user_answers[index].choice_val ? 'BENAR' : 'SALAH'}
                            </Typography>
                          </Typography>
                        </TableCell>
                      </TableRow>
                    ))}

                  </TableBody>
                </Table>
              </TableContainer>
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
