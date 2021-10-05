import axios from 'axios';
import React, { Component } from "react";
import ImagenesDataService from "../services/imagenes.service";


// reactstrap components
import { Card, CardHeader, CardBody, Row, Col } from "reactstrap";

// core components
import PanelHeader from "components/PanelHeader/PanelHeader.js";

import icons from "variables/icons";

class Icons extends React.Component  {
  
  constructor(props) {
    super(props);
    this.onChangeImagenes = this.onChangeImagenes.bind(this);
    this.onChangeDescription = this.onChangeDescription.bind(this);
    this.saveImagenes= this.saveImagenes.bind(this);
    this.newImagenes = this.newImagenes.bind(this);
//campos de la base de datos 
    this.state = {
      _id: null,
      nombre: "",
      descripcion: "",
      ulr_imagen: null
    };
  }

  onChangeImagenes(e) {
    this.setState({
      nombre: e.target.value
    });
  }

  onChangeDescription(e) {
    this.setState({
      descripcion: e.target.value
    });
  }
  
onFileChange = event => {
    
// Update the state
    this.setState({ selectedFile: event.target.files[0] });
  
  };
// On file upload (click the upload button)
onFileUpload = () => {
    
  // Create an object of formData
  const formData = new FormData();
  // Update the formData object
  formData.append(
    alert(
      "myFile",
    this.state.selectedFile,
    this.state.selectedFile.name
    )
  );

  // Details of the uploaded file
  console.log(this.state.selectedFile);

  // Request made to the backend api
  // Send formData object
  axios.post("api/uploadfile", formData);
};

fileData = () => {
    
  if (this.state.selectedFile) {
     
    return (
      <div>
        <h2>File Details:</h2>
         
            <p>File Name: {this.state.selectedFile.name}</p>

                    
            <p>File Type: {this.state.selectedFile.type}</p>

                    
            <p>
          Last Modified:{" "}
          {this.state.selectedFile.lastModifiedDate.toDateString()}
        </p>

      </div>
    );
  } else {
    return (
      <div>
        <br />
        <h4>Choose before Pressing the Upload button</h4>
      </div>
    );
  }
};

  saveImagenes() {
    var data = {
      nombre: this.state.nombre,
      descripcion: this.state.descripcion
    };

    ImagenesDataService.create(data)
      .then(response => {
        this.setState({
          _id: response.data._id,
          nombre: response.data.nombre,
          descripcion: response.data.descripcion,

          submitted: true
        });
        console.log(response.data);
      })
      .catch(e => {
        console.log(e);
      });
  }

  newImagenes() {
    this.setState({
      _id: null,
      nombre: "",
      descripcion: "",

      submitted: false
    });
  }





  render() {
    const { selectedFiles, progressInfos, message, fileInfos } = this.state;
    return (
      <div className="submit-form">
      {this.state.submitted ? (
        <div>
           <br>
          </br>
          <h4>You submitted successfully!</h4>
          <button className="btn btn-success" onClick={this.newImagenes}>
            Add
          </button>
        </div>
      ) : (
        <div>
          <br>
          </br>
          
          <div className="form-group">
            <label htmlFor="nombre">Nombre</label>
            <input
              type="text"
              className="form-control"
              id="nombre"
              required
              value={this.state.nombre}
              onChange={this.onChangeImagenes}
              name="nombre"
            />
          </div>

          <div className="form-group">
            <label htmlFor="descripcion">Descripcion</label>
            <input
              type="text"
              className="form-control"
              id="descripcion"
              required
              value={this.state.descripcion}
              onChange={this.onChangeDescription}
              name="descripcion"
            />
          </div>

          <div>
            <div>
                <input type="file" onChange={this.onFileChange} />
                <button onClick={this.onFileUpload}>
                  Upload!
                </button>
            </div>
// que despues de aki cuando le de en esa madre al boton que me guarde la imagen
          {this.fileData()}
        </div>


          <button onClick={this.saveImagenes} className="btn btn-success">
            Submit
          </button>
        </div>
      )}
    </div>
    );

  }


}
export default Icons;