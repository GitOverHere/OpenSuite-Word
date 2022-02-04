ReactDOM.render(
<div>
  <header className="header">
    <div className="header_container">
      <nav className="buttons">
        <a>Your Feed</a>
        <a>Notifications</a>
        <a>Groups</a>
        <a>Answer</a>
      </nav>
      <div className="sb-example-1">
        <div className="search">
          <input type="text" className="searchTerm" placeholder="Search For Any Question." />
          <button type="submit" className="searchButton">
            <i className="fa fa-search" />
          </button>
        </div>
      </div>
    </div>
  </header>
  <div className="icons">
    <div className="pfp">
      <img className="pfp-image" />
      <a className="profile">
      </a>
    </div>
    <a className="button" id="ask-question">Ask a Question</a>
    <div className="language">
    </div>
    <section className="feed-container">
      <aside className="groups">
        <p> This is where you will find your spaces </p>
        <div className="group_container">
          <div className="group_pfp">
            <img alt="none" />
          </div>
          <div className="group_name">
            <p>Login to see groups.</p>
          </div>
        </div>
      </aside>
      <div className="feed">
        <article className="question">
          <h1 className="question-title">Question Title </h1>
          <div className="content">
          </div>
        </article>
        <p className="end">You have reached the end of your feed</p>
      </div>
      <aside className="topics">
        <p>Topics you follow. </p>
        <div className="topic_container">
          <div className="topic_pfp">
            <img alt="none" />
          </div>
          <div className="topic_name">
            <p>Login to see groups.</p>
          </div>
        </div>
      </aside>
    </section>
  </div>
  <footer className="footer">
    <div className="col-container">
      <div className="col-1">
        <a href="About">About</a>
        <a href="Ads">Ads</a>
        <a href="Careers">FAQ</a>
        <a href="Jobs">Jobs</a>
      </div>
      <div className="col-2">
        <a href="Terms">Terms</a>
        <a href="Privacy">Privacy</a>
        <a href="Sitemap">Sitemap</a>
        <p>Website made by Binayak Sahu </p>
      </div>
    </div>
  </footer>
</div>
,document.querySelector("body"));