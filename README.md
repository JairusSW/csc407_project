I'm gonna be honest, I used codex to build out most of this. My brain is deep fried. HOWEVER, I've been going through the entire codebase and cross-referencing with docs, asking chatgpt about things, and tweaking things myself. I feel like I now have a fairly decent/good grasp of blade and php now, though i'm far from fluent.

to run:

```sh
docker compose up -d --build
```

Open <http://localhost:8088>

# Attribution

I used Artisan to do the initial scaffold. I then used Codex to implement the pages in blade and also had it scaffold the folder structure further and make skeleton files. I also had it implement most of the frontend for me

> please build out the project in ~/Downloads/Sample Code. there should be a requirements document. Go implement in ~/Code/csc407_project. I have it scaffolded out w/ artisan
>
> keep it as dead simple as possible. don't worry about errors/catching them. make it work and do the absolute bare minimum to fit the requirements. nothing fancy. i want to come back later and work with you so i can ask you questions as i go over and understand it. don't implement the server stuff. i want to figure out how to do that.

> make this even simpler. code should essentially be self-documenting and what i mean by that is clear and readable so that the intent is clear

> make it as dead simple as possible. super easy to keep in head. we aren't doing aws yet so dw about that
> remove all unneeded files. go file by file and remove em all
> ah if you need to mess with composer then don't change name. try to keep stuff lowercase whenever possible though

> switch everything to snake case. lowercase
  Last_Name

> does Providers/AppServiceProvider.pgp do anything? it looks dead to me

> im removing this fyi
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //

> hey Contact::orderby is showing up as not implemented? i'm looking at it on the docs and it's supposed to be there and it runs. not sure what i'm
  doing wrong

> what methods are on Contagt again?

> remove backup db

Beyond that, it was really a bunch of me asking codex what things meant, how to do things (my intellisense still is not working right so i can't see methods and stuff, so i asked it what methods to use and also checked docs too splitscreen). Essentially, I had ai make the frontend. I implemented the a good chunk of the backend and asked it a lot of questions whenever i was stuck or confused.
