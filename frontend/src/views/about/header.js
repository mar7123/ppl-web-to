


// ** Next Import
import Link from 'next/link'

// ** MUI Imports
import Box from '@mui/material/Box'
import Grid from '@mui/material/Grid'
import Button from '@mui/material/Button'
import Typography from '@mui/material/Typography'
import { CardContent } from '@mui/material'
import Card from '@mui/material/Card'


const LandingPageHeader = () => {
    return (
      <>
        <Typography variant='h3' sx={{ fontWeight: 'bold' }}>
          Komponen Ujian Tertulis Berbasis Komputer dalam Seleksi Nasional Penerimaan Mahasiswa Baru (UTBK-SNPMB)
        </Typography>

        <Typography variant='body1' sx={{ alignItems: 'center', mt: 3, textAlign: 'justify' }}>
          <p>
            Berdasarkan penjelasan pada kebijakan umum, materi tes dalam Ujian Tertulis Berbasis Komputer dalam Seleksi
            Nasional Penerimaan Mahasiswa Baru (UTBK-SNMPMB) akan terdiri dari dua komponen besar yaitu Tes
            Potensi Skolastik dan Tes Literasi. Jelajahi bagian utama di bawah ini untuk mendapatkan informasi terkait
            komponen kerangka dalam UTBK-SNPMB.
          </p>
          <p>
            TryoutX menyediakan platform tryout online yang dapat membantu calon mahasiswa untuk berlatih secara
            sistematis dengan simulasi kondisi ujian sebenarnya. Melalui platform ini, calon mahasiswa dapat mengukur
            kemampuan mereka dalam menjawab soal-soal yang serupa dengan yang akan dihadapi dalam UTBK-SNMPMB. Selain
            itu, TryoutX juga menyediakan analisis hasil tryout untuk membantu calon mahasiswa memahami kekuatan dan
            kelemahan mereka, sehingga mereka dapat fokus pada area yang perlu ditingkatkan. Dengan memanfaatkan sumber
            daya seperti TryoutX, calon mahasiswa dapat meningkatkan kesiapan mereka menghadapi UTBK-SNMPMB,
            sehingga memiliki peluang yang lebih baik untuk berhasil dalam seleksi penerimaan mahasiswa baru.
          </p>
        </Typography>
      </>
    )
 }



export default LandingPageHeader
