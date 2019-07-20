import ReactDOM from 'react-dom'
import HelloComponent from "./components/hello/hello";
import * as React from "react";

ReactDOM.render(
    <HelloComponent text="Hello from React!!" />,
    document.getElementById('hello')
);
