import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}

if (document.getElementById('example')) {
    // find element by id
    const element = document.getElementById('example')
      
    // create new props object with element's data-attributes
    // result: {tsId: "1241"}
    const props = Object.assign({}, element.dataset)

    console.log(props);

    // render element with props (using spread)
    ReactDOM.render(<Welcome {...props}/>, element);
}

function Welcome (props) {
    console.log(JSON.parse(props.tsid)[0].name);
    return <h1>Hello, {JSON.parse(props.tsid)[0].name}</h1>
}