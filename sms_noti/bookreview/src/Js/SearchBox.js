import React from 'react'
import '../css/Licence.css'

function SearchBox(props) {
    return (
        <div>
           <label>Enter your licence number:{props.licence}</label> <br></br><input type="text" onChange={props.handleInput} className="searchbox"/>
        </div>
    )
}

export default SearchBox
