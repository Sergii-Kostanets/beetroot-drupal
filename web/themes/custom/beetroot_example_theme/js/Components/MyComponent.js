import {useEffect, useRef, useState} from "react";

export function MyComponent() {
  const [error, setError] = useState(null);
  const [isLoaded, setIsLoaded] = useState(false);
  const [data, setData] = useState({});
  const listRef = useRef(null);

  // Note: the empty deps array [] means
  // this useEffect will run once
  // similar to componentDidMount()
  useEffect(() => {
    fetch(`${document.location.origin}/jsonapi/node/article?include=tags&page[limit]=10`)
      .then(res => res.json())
      .then(
        (result) => {
          setIsLoaded(true);
          setData(result.data);
        },
        // Note: it's important to handle errors here
        // instead of a catch() block so that we don't swallow
        // exceptions from actual bugs in components.
        (error) => {
          setIsLoaded(true);
          setError(error);
        }
      )
  }, [])

  useEffect(() => {
    if (listRef.current) {
      Drupal.attachBehaviors(listRef.current);
    }
  })

  if (error) {
    return <div>Error: {error}</div>;
  } else if (!isLoaded) {
    return <div>Loading...</div>;
  } else {
    return (<div><h2>Nodes list</h2><ul ref={listRef}>{data.map((node) => <li><a className='use-ajax' href={`/node/${node.drupal_internal__nid}`}>{node.title}</a>. {node.tags.length>0?node.tags?.map(tag => tag.name).join(', '):''}</li>)}<li>
    <a href="/node/add/article" className='use-ajax' data-dialog-type='modal' data-dialog-options="{&quot;width&quot;:900}">{Drupal.t('Add article')}</a></li></ul></div>);
  }
}
