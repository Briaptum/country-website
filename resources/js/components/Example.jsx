import React from 'react';
import ReactDOM from 'react-dom/client';

export default function Example() {
    const handleClick = () => {
        alert('Hello React');
    };

    return (
        <div className="container" onClick={handleClick}>
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

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}