
async function request(options={}) {


    if (options.body) {
        options.body = new URLSearchParams(options.body).toString();
        options.headers = { 'Content-type': 'application/x-www-form-urlencoded' };
    }
    
    const req = await fetch('http://localhost/projetos/basketball',{
        method: "GET",
    })
    return await req.json();
}

export { request };