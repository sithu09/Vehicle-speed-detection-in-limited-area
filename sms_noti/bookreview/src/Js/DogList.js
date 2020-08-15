import React from 'react'
import '../css/Licence.css'
import Dog from './Dog'

function DogList(props) {
    let dogs=props.filteredDogs.map((dog,i)=>{
        return <Dog key={i} name={dog.name} breed={dog.breed} id={dog.id} address={dog.address}
        phone={dog.phone} job={dog.job} licence={dog.licence} code={dog.code} model={dog.model} term={dog.term}/>
    })
    return (
        <div>
           <label>Enter your licence number:</label> <input type="text" onChange={props.handleInput} className="ifont" /><hr/>
            {dogs}
        </div>
    )
}

export default DogList
