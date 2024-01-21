const textEl = document.getElementById('text')


const text = 'Добро пожаловать в школу программирования!'

let idx = 1
let speed = 70

writeText()
function writeText() {
    textEl.innerText = text.slice(0, idx)


    idx++

    if(idx >= text.length) {
        inx = text.length
    }

    setTimeout(writeText, speed)
}