const express = require('express')
const path = require('path')

const app = express();
const PORT = process.env.PORT || 3001;

app.use(express.static('public'))

app.listen(PORT, () => {
    console.log(`Server started and ready at http://localhost:${PORT}`);
})