// import {useEffect, useState} from "react";

import {useState} from "react";

function AnotherComponent({count}) {
  return <em>{count}</em>
}

export function MyComponent() {
  const [counter, setCounter] = useState(0);
  return <h1 onClick={() => setCounter(counter + 1)}>Hello <AnotherComponent count={counter} /> from React!</h1>
  // const [error, setError] = useState(null);
  // const [isLoaded, setIsLoaded] = useState(false);
  // const [data, setData] = useState({});

  // Note: the empty deps array [] means
  // this useEffect will run once
  // similar to componentDidMount()
  // useEffect(() => {
  //   fetch(`${document.location.origin}/example/api`)
  //     .then(res => res.json())
  //     .then(
  //       (result) => {
  //         setIsLoaded(true);
  //         setData(result);
  //       },
        // Note: it's important to handle errors here
        // instead of a catch() block so that we don't swallow
        // exceptions from actual bugs in components.
  //       (error) => {
  //         setIsLoaded(true);
  //         setError(error);
  //       }
  //     )
  // }, [])
  //
  // if (error) {
  //   return <div>Error: {error.message}</div>;
  // } else if (!isLoaded) {
  //   return <div>Loading...</div>;
  // } else {
  //   return (<div><h2>Drupal version: {data.version}</h2></div>);
  // }
}
