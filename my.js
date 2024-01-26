function Tour(props) {
    return (
        <div className="card">
            <div className="card-img">
                <img className="tour-img" src={props.tour.photo} />
                <h3>
                    <a className="tour-ref" href={"tour.php?id=" + props.tour.id}>
                        {props.tour.name}
                    </a>
                </h3>
            </div>
        </div>
    );
}

class App extends React.Component {
    state = { tours: [], isFetching: false };

    fetchTours = () => {
        this.setState({ ...this.state, isFetching: true });
        fetch("api.php")
            .then(response => response.json())
            .then(result => this.setState({ tours: result, isFetching: false }))
            .catch(e => console.log(e));
    };

    componentDidMount() {
        this.fetchTours();
    }

    render() {
        console.log(this.state);
        return (
            <div className="app">
                <div className="list">
                    <div className="row">
                        {this.state.tours.map(tour => (
                            <div className="col" key={tour.id}>
                                <Tour tour={tour} />
                            </div>
                        ))}
                    </div>
                </div>
            </div>
        );
    }
}

ReactDOM.render(<App />, document.getElementById('root'));
