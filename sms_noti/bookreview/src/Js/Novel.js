import React, { Component } from 'react'
import * as firebase from 'firebase'
import DogList from './DogList'
import SearchBox from './SearchBox'
import '../css/Licence.css'


export class Novel extends Component {
    constructor(props) {
        super(props)
      
        this.state = {
           dogs:[
               {name:"U Kyaw Min Htun",breed:"Lab",id:"9/ThaZaNa(N)180924",address:"ThaZi/Mandalay",phone:"09691788837",licence:"1H-1077",job:"Thor",model:"Toyota Belta SCP92",term:"2018-05-31",code:"bhbahh"},
               {name:"U Zaw Zaw Latt",id:"9/MaHtaLa(N)340221",address:"Meiktila/Mandalay",phone:"09697010345",licence:"2H-2093",job:"Hulk",model:"Hyunadi Starex",term:"2018-06-30",code:"chcajd"},
               {name:"U Tin Maung Htay",id:"9/WaDaNa(N)783778",address:"Wundwin/Mandalay",phone:"09783778055",licence:"3P-3022",job:"Wolverine",model:"Toyota Hiace KDH222",term:"2018-11-30",code:"dpdacc"}
           ],
           searchDog:''
        }
      }
      handleInput=(e)=>{
          this.setState({searchDog:e.target.value})
      }
      
      render() {
          let filteredDogs=this.state.dogs.filter((dog)=>{
              return dog.code.toLowerCase().includes(this.state.searchDog.toLowerCase())
          })
          return (
              <div>
                 
               <h1 className="App">Licence Plate Recognition: A(0) B(1) C(2) D (3) E(4) F(5) G(6) H(7) I(8) J(9)</h1>
               
               <DogList filteredDogs={filteredDogs} handleInput={this.handleInput}/>
          
              </div>
          )
      }
  }
export default Novel
