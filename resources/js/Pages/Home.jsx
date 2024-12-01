import { Link } from "@inertiajs/react";

export default function Home({posts}) {
    console.log(posts)
    return (
        <>
            <div>
                {posts.data.map(post => (
                    <div key={post.id} className="p-4 border-b">
                        <div>
                            <span>Posted on : </span>
                            <span>{ new Date(post.created_at).toLocaleTimeString() }</span>
                        </div>
                        <p className="font-medium">{post.body}</p>
                    </div>
                ))}
            </div>

            <div className="py-12 px-4">
                {posts.links.map(link => (
                    link.url ? 
                        <Link 
                            href={link.url} 
                            key={link.label} 
                            dangerouslySetInnerHTML={{ __html: link.label }}
                            className={`p-1 mx-1 ${
                            link.active ? "text-blue-500 font-bold" : ''}
                            `}/>
                    :
                    <span
                        key={link.label} 
                        dangerouslySetInnerHTML={{ __html: link.label }}
                        className={`p-1 mx-1 text-slate-300`}
                    ></span>
                ))}
            </div>
            {/* if u want to click on something and keep the scroll position use 'preserveScroll attr' */}

            {/* <Link preserveScroll href="/" className="block title mt-[1000px]">
                {new Date().toLocaleTimeString()}
            </Link> */}
        </>
    )
}

{/*Home.layout = page => <Layout children={page} /> // render page within layout

export default Home*/}