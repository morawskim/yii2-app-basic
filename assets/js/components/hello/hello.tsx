import * as React from 'react';

interface Props {
    text: string;
}

export default class HelloComponent extends React.Component<Props, {}> {

    render() {
        return (
            <h1>{this.props.text}</h1>
        );
    }
}
