import Typography from '@mui/material/Typography'

import Grid from '@mui/material/Grid'
import Box from '@mui/material/Box'

import BlankLayoutWithAppBar from 'src/@core/layouts/BlankLayoutWithAppBar'
import Footer from 'src/views/footer/Footer'
import { useRouter } from 'next/router'
import Card from '@mui/material/Card'
import CardActions from '@mui/material/CardActions'
import CardActionArea from '@mui/material/CardActionArea'
import CardContent from '@mui/material/CardContent'
import CardMedia from '@mui/material/CardMedia'
import Button from '@mui/material/Button'


// ** Axios
import axios from 'axios'

import { useState, useEffect } from 'react'

const ArticlePage = () => {
  const router = useRouter()

  const [currentArticle, setCurrentArticle] = useState({})
  const [otherArticle, setOtherArticle] = useState([])
  const { article_id } = router.query
 

  useEffect(() => {
    axios
      .get('https://code.tryoutx.com/api/articles')
      .then(response => {
        const responseData = response.data.data.data
        const otherArticle = []
        responseData.map(data => {
          if (data.article_id == article_id) {
            setCurrentArticle(data)
          } else {
            otherArticle.push(data)
          }
          setOtherArticle(otherArticle)
        })
      })
      .catch(error => {
        console.error('Error fetching data:', error)
      })
  }, [article_id])



  return Object.keys(currentArticle).length !== 0 ? (
    <>
      <Box sx={{ m: 5}}>
        <Grid container spacing={10} sx={{ mt: 5 }}>
          <Grid item xs={12} lg={12}>
            <CardMedia image={currentArticle.article_img} sx={{ height: 200 }}>
              <Box sx={{ display: 'flex', alignItems: 'flex-end', minHeight: '100%' }}>
                <Typography variant='h4' color='white' sx={{ m: 3, fontWeight: 'bold' }}>
                  {currentArticle.article_title}
                </Typography>
              </Box>
            </CardMedia>
          </Grid>
          <Grid item xs={12} lg={12}>
            <Typography maxWidth='60%'>
              {currentArticle.author}, {currentArticle.published_at}
              <br />
            </Typography>
            <Box sx={{ display: 'flex', justifyContent: 'center', displayDirection: 'column', alignItems: 'center' }}>
              <Typography
                sx={{ justifyContent: 'center' }}
                dangerouslySetInnerHTML={{ __html: currentArticle.article_desc }}
              />
      
            </Box>
          </Grid>
          <Grid item xs={12} lg={12}>
            <Box sx={{ display: 'flex', justifyContent: 'center' }}>
              {otherArticle.map(data => {
                return (
                  <Card key={data.article_id} sx={{ maxWidth: 345, m: 3 }}>
                    <CardActionArea onClick={() => router.push(`/article-page?article_id=${data.article_id}`)}>
                      <CardMedia sx={{ height: 140 }} image={data.article_img} title='green iguana' />
              
                      <CardContent>
                        <Typography gutterBottom variant='h5' component='div'>
                          {data.article_title}
                        </Typography>
                      </CardContent>
                    </CardActionArea>
                  </Card>
                )
              })}
            </Box>
          </Grid>
        </Grid>
      </Box>
      <Footer />
    </>
  ) : null
}
ArticlePage.getLayout = page => <BlankLayoutWithAppBar>{page}</BlankLayoutWithAppBar>
ArticlePage.authGuard = false
export default ArticlePage
