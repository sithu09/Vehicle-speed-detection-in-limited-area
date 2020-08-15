import React from 'react'
import '../css/Licence.css'

function Dog(props) {
    return (
       
        <div>
            
    <p><b>{props.licence}</b>Name:&emsp;{props.name}</p>
    <div  className="id">
            <p>ID:&emsp;{props.id}</p>
            <p> Address:&emsp;{props.address}</p>
            <p>Phone-No:&emsp;{props.phone}</p>
            <p>Job:&emsp;{props.job}</p>
            <p>Licence-No:&emsp;{props.licence}</p>
            <p>Model:&emsp;{props.model}</p>
            <p>Term:&emsp;{props.term}</p>
    </div>
            <hr/>
        </div>
    )
}

export default Dog
