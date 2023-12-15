// ** MUI Imports
import { Grid } from '@mui/material'

import Card from '@mui/material/Card'
import CardContent from '@mui/material/CardContent'
import CardMedia from '@mui/material/CardMedia'
import Typography from '@mui/material/Typography'
import { Button, CardActionArea, CardActions } from '@mui/material'
import IconButton from '@mui/material/IconButton'
import Icon from 'src/@core/components/icon'
import Divider from '@mui/material/Divider'
import Box from '@mui/material/Box'
import CircularProgress from '@mui/material/CircularProgress'


import { useRouter } from 'next/router'
import { useState, useEffect } from 'react'

// ** Axios
import axios from 'axios'


const Article = () => {
  const router = useRouter()
  const [data, setData] = useState([])
  const [mainPost, setMainPost] = useState([])
  const [secPost, setSecPost] = useState([])



  useEffect(() => {
    axios
      .get('https://code.tryoutx.com/api/articles')
      .then(response => {
        const responseData = response.data.data.data
          setData(response.data.data)
          setMainPost(responseData.slice(0, 1))
          setSecPost(responseData.slice(1)) 
      })
      .catch(error => {
        console.error('Error fetching data:', error)
      })
  }, [])

  const handleNextPage = () => {axios
    .get(data.next_page_url)
    .then(response => {
      console.log('berhasil ke laman selanjutnya')
      setData(response.data.data)
      setMainPost(data.data.slice(0, 1))
      setSecPost(data.data.slice(1))
    })
    .catch(error => {
      console.error('Error fetching data:', error)
    })
  }

  const handlePrevPage = () => {axios
    .get(data.prev_page_url)
    .then(response => {
      console.log('berhasil ke laman sebelumnya')
      setData(response.data.data)
      setMainPost(data.data.slice(0, 1))
      setSecPost(data.data.slice(1))
    })
    .catch(error => {
      console.error('Error fetching data:', error)
    })}

  return !data == false ? (
    <Box sx={{ display: 'flex', justifyContent: 'center', alignItems: 'center', mt:10 }}>
      <IconButton
        aria-label='capture screenshot'
        color='secondary'
        size='large'
        onClick={handlePrevPage}
        disabled={data.prev_page_url == null ? true : false}
      >
        <Icon icon='tabler:chevron-left' fontSize={35} />
      </IconButton>
      <Grid container>
      {mainPost.map((mainPost, index) => {
        return (
          <Grid item xs={12} lg={7} key={index}>
            <CardActionArea
              sx={{ p: 2 }}
              onClick={() => {
                const url = `/article-page?article_id=${mainPost.article_id}`
                window.open(url, '_blank')
            
              }}
            >
              <Box
                sx={{
                  boxShadow: 10,
                  minHeight: '100%',
                  maxHeight: '100%',
                  alignItems: 'center'
                }}
              >
                <img src={mainPost.article_img} width='100%' height='100%' alt='Picture of the author'></img>
                <Box sx={{ m: 2 }}>
                  <Typography variant='body2' component='div' sx={{ pl: 3, textOverflow: 'ellipsis' }}>
                    {mainPost.author}, {mainPost.published_at}
                  </Typography>
                  <Typography variant='h5' sx={{ p: 3 }}>
                    {mainPost.article_title}
                  </Typography>
                </Box>
              </Box>
            </CardActionArea>
          </Grid>
        )
      })}
      
        <Grid item xs={12} lg={5}>
          <Grid container>
            {secPost.map(secPost => {return (
              <Grid item xs={12} key={secPost.article_id}>
                <CardActionArea
                  sx={{ p: 2 }}
                  onClick={() => {
                    const url = `/article-page?article_id=${secPost.article_id}`
                    window.open(url, '_blank')
    
                  }}
                >
                  <Box sx={{ boxShadow: 10, display: 'flex', alignItems: 'center' }}>
                    <img src={secPost.article_img} width='150' height='100%' alt='Picture of the author'></img>
                    <Box sx={{ p: 2 }}>
                      <Typography
                        variant='body2'
                        component='div'
                        sx={{ ml: 3, textOverflow: 'ellipsis', maxHeight: 200 }}
                      >
                        {secPost.author}, {secPost.published_at}
                      </Typography>
                      <Typography variant='h6' component='div' sx={{ ml: 3, textOverflow: 'ellipsis' }}>
                        {secPost.article_title}
                      </Typography>
                    </Box>
                  </Box>
                </CardActionArea>
              </Grid>
            )})}
          </Grid>
        </Grid>
      </Grid>
      <IconButton
        aria-label='capture screenshot'
        color='secondary'
        size='large'
        onClick={handleNextPage}
        disabled={data.next_page_url ? false : true}
      >

        <Icon icon='tabler:chevron-right' fontSize={35} />
      </IconButton>
    </Box>
  ) : (
    <Box sx={{display:'flex', justifyContent:'center'}}>
      <CircularProgress />
    </Box >
      )
}

export default Article
